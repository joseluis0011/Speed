<?php
/**
 * Created by PhpStorm.
 * User: nik_1
 * Date: 17/02/2018
 * Time: 15:53
 */

namespace App\Repo;


use App\Buzon;
use App\Notificacion;
use App\Pagos;
use App\Persona;
use App\Posts;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AdminRepo
{
    protected $model_persona;
    protected $model_user;
    protected $model_pagos;
    protected $model_notifi;
    protected $model_buzon;
    protected $model_post;

    public function __construct(Persona $persona,User $user,Pagos $pagos,Notificacion $notificacion,Buzon $buzon,Posts $posts)
    {
        $this->model_persona = $persona;
        $this->model_user= $user;
        $this->model_pagos = $pagos;
        $this->model_notifi = $notificacion;
        $this->model_buzon = $buzon;
        $this->model_post = $posts;
    }

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


    public function createUserByadmin($data){
        $model = new $this->model_user;
        $model->nombre = $data['name'];
        $model->dni = $data['dni'];
        $model->apellido = $data['apellido'];
        $model->password = bcrypt($data['password']);
        $model->save();
     return $model;
    }
    public function createClienteByAdmin($data,$iduser){
        $model = new $this->model_persona;
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


    public function CreatePago($data){
        $model = new $this->model_pagos;
        $model->mes =  $data['mes'];
        $model->monto = $data['monto'];
        $model->comentario = $data['comentario'];
        $model->persona_idpersona = $data['idpersona'];

        $model->save();

        return $model;
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

    // --------------- notificaciones -----------------------

    public function listNotify(){
      $data=  $this->model_notifi
            ->where('view','no')
          ->join('persona','persona.idpersona','=','notificaciones.persona_idpersona')
          ->where('idreferido',Auth::id())
          ->get();

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

    public function newBuzonInfo($data,$idnoty){
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

    public function CreateNewNotification($idpersona,$display){
        $model = new $this->model_notifi;
         $model->persona_idpersona = $idpersona;
         $model->reclamo = $display;
         $model->view = 'no';
         $model->typenoti = 3;

        $model->save();
        return $model;
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

}