<?php
/**
 * Created by PhpStorm.
 * User: nik_1
 * Date: 17/02/2018
 * Time: 15:53
 */

namespace App\Repo;


use App\Buzon;
use App\Config;
use App\Notificacion;
use App\Pagos;
use App\Persona;
use App\Posts;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class AdminRepo
{
    protected $model_persona;
    protected $model_user;
    protected $model_pagos;
    protected $model_notifi;
    protected $model_buzon;
    protected $model_post;
    protected $model_config;

    public function __construct(Persona $persona,User $user,Pagos $pagos,Notificacion $notificacion,Buzon $buzon,Posts $posts,Config $config)
    {
        $this->model_persona = $persona;
        $this->model_user= $user;
        $this->model_pagos = $pagos;
        $this->model_notifi = $notificacion;
        $this->model_buzon = $buzon;
        $this->model_post = $posts;
        $this->model_config = $config;
    }

    //--------------List Models ------------------
    public function listClienteByAdmin(){
        $por = $this->model_persona
            ->where('idreferido',Auth::id())
            ->where('typeuser',0)
            ->get();
        return $por;
    }
    public function listAdmin(){
        $por = $this->model_persona
            ->where('typeuser',1)
            ->get();
        return $por;
    }
    public function listPagos(){
      $data = $this->model_pagos
          ->join('persona','persona.idpersona','=','pagos.persona_idpersona')
          ->where('idreferido',Auth::id())
          ->get();
        foreach ($data as $d){
            $d->Persona->User;
        }

        return $data;
    }
    public function listNotify(){
      $data=  $this->model_notifi
            ->where('view','no')
          ->join('persona','persona.idpersona','=','notificaciones.persona_idpersona')
          ->where('idreferido',Auth::id())
          ->get();
        foreach ($data as $da){
            $da->Persona->user;
        }

            return $data;
    }
    public function listNotifybyType($type){
         $data  =  $this->model_notifi
            ->where('typenoti',$type)
            ->join('persona','persona.idpersona','=','notificaciones.persona_idpersona')
            ->where('idreferido',Auth::id())
            ->get();
        foreach ($data as $da){
            $da->Persona->User;
        }
       return $data;
    }
    public function listNotyBuzon(){
      $model = $this->model_notifi
            ->join('buzon','buzon.idnotification','=','notificaciones.idnotificaciones')
            ->where('typenoti',3)
            ->get();

       return $model;
    }
    public function listNotyBuzonN(){
        $model = $this->model_notifi
            ->join('buzon','buzon.idnotification','=','notificaciones.idnotificaciones')
            ->where('typenoti',3)
            ->where('view','no')
            ->get();

        return $model;
    }

    //----------- others Methods ---------------------
    public function updateView($id){
       $model = $this->model_notifi
                ->where('idnotificaciones',$id)->first();
        $model->view = 'si';
        $model->update();
        return $model;
    }
    public  function myProfile(){
        return Auth::guard('web')->user();
    }
    public function changePasword($data){
        if(password_verify($data['password'],Auth::guard('web')->user()->password)){
          $model = User::find(Auth::id());
            $model->password = bcrypt($data['new_password']);
            $model->update();
            return $model;
        }
        return null;
    }
    public function getPostWebPage(){
       return $this->model_post
            ->get();
    }
    public function savePostWebPage($part,$data){
        $model = $this->model_post->where('id',$part)->first();
        $model->body = $data['body'];
        $model->save();

        return $model;
    }
    //--------------- Get Models -------------------
    public function getPersona($id){
        if($id != null){
            $model = $this->model_persona->whereIdpersona($id)->get();
            foreach ($model as $mo){
                $mo->user;
            }
            return $model[0];
        }
      return null;
    }
    public function getBuzon($id){
     return $this->model_buzon->whereIdbuzon($id)->first();
    }
    public function getPagos($id){
        return $this->model_pagos->whereIdpagos($id)->first();

    }
    public function getUser($id){
        return $this->model_user->whereIdusuario($id)->first();
    }
    public function getNotify($id){
        return $this->model_user->whereIdnotificaciones($id)->first();
    }
    //-------------- Creat && Update Models-----------
    public function createUserByadmin($data){
        $model = $this->getUser($data['id_user']);
        if(!$model){
            $model = new $this->model_user;
            Session::flash('success','Creado correctamente');
        }else{
            Session::flash('success','Actualizado correctamente');
        }
        $model->nombre = $data['name'];
        $model->dni = $data['dni'];
        $model->apellido = $data['apellido'];
        if($data['password'] != null){
            $model->password = bcrypt($data['password']);
        }
        $model->save();
        return $model;
    }
    public function createClienteByAdmin($data,$iduser){
        $model = $this->getPersona($data['id_per']);
        if(!$model){
            $model = new $this->model_persona;
        }
        $model->direccion = $data['direccion'];
        $model->telefono = $data['telefono'];
        $model->finicio = Carbon::parse($data['finicio'])->format('Y-m-d');
        $model->router = $data['router'];
        $model->antena = $data['antena'];
        $model->tantena = $data['tantena'];
        $model->plan = $data['tplan'];
        $model->estado = $data['state'];
        $model->email = $data['email'];
        $model->typeuser = ($data['token_admin'] != null)? 1:0;
        $model->usuario_idusuario = $iduser;
        $model->idreferido = Auth::id();
        $model->save();
        return $model;
    }
    public function createPago($data){
        $model = $this->getPagos($data['id']);
        if (!$model){
            $model = new $this->model_pagos;
        }
        $model->mes =  $data['mes'];
        $model->monto = $data['monto'];
        $model->comentario = $data['comentario'];
        $model->persona_idpersona = $data['idpersona'];

        $model->save();
        return $model;
    }
    public function createNewNotification($idpersona,$display){
        $model = new $this->model_notifi;
        $model->persona_idpersona = $idpersona;
        $model->reclamo = $display;
        $model->view = 'no';
        $model->typenoti = 3;

        $model->save();
        return $model;
    }
    public function createBuzonInfo($data,$idnoty){
        $model = new $this->model_buzon;
        $model->nombre= $data['name'];
        $model->apellido= $data['apellido'];
        $model->telefono= $data['phone'];
        $model->direccion= $data['direccion'];
        $model->plan= $data['tplan'];
        $model->comentario= $data['coment'];
        $model->idnotification= $idnoty;
        $model->save();
        return $model;
    }

    //----------------------- delete Models --------------------

    public function typeDel(){
      return  $this->model_config->where('tools','type_delete')->first();
    }
    public function deletePerson($id){
        $per = $this->model_persona->find($id);
        return $per->delete();
    }
    public function restorePerson($id){
      $per = $this->model_persona->withTrashed()->find($id);
        $per->restore();
    }

    //----------------------- config Model -----------------------

    public function getConfigUser($id,$data){
      $model =  $this->model_config->whereIduser($id)->first();
        $model->value = $data['value'];
        $model->update();
        return $model;
    }









}