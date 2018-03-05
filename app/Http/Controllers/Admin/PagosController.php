<?php

namespace App\Http\Controllers\Admin;

use App\Repo\AdminRepo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class PagosController extends Controller
{
    protected  $repo_admin;
    public function __construct(AdminRepo $repo)
    {
        $this->repo_admin = $repo;
    }

    public function index()
  {
    $pay =  $this->repo_admin->listPagos();
    return view('admin.pagos.index',compact('pay'));
  }
  public function create()
  {
      $cli = $this->repo_admin->listClienteByAdmin();
      //return $cli;
    return view('admin.pagos.create',compact('cli'));
  }
  public function newPago(Request $request){
      $data =$this->repo_admin->createPago($request);
      if($data != null){
          Session::flash('pago_success','Pago Creado Correctamente');
          return back();
      }else{
          Session::flash('error','Error !!!!!');
          return back();
      }
  }

  public function  getNotifynewall(){
      return $this->repo_admin->listNotify();
  }
  public function  getBuzon(){
      return $this->repo_admin->listNotyBuzonN();
  }


}
