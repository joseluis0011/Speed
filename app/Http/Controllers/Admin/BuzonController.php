<?php

namespace App\Http\Controllers\Admin;

use App\Repo\AdminRepo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class BuzonController extends Controller
{
    protected $repo_admin;

    public function __construct(AdminRepo $adminRepo)
    {
        $this->repo_admin = $adminRepo;
    }
  public function index()
  {
        $noti = $this->repo_admin->listNotyBuzon();

    return view('admin.notificaciones.buzon.index',compact('noti'));
  }
  public function newCliente(Request $request){
      $noty = $this->repo_admin->CreateNewNotification(null,$request['coment']);
      $this->repo_admin->newBuzonInfo($request,$noty->idnotificaciones);
      Session::flash('success','Enviado Correctamente');
      return redirect('/');
  }

}
