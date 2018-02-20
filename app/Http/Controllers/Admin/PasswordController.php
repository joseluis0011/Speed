<?php

namespace App\Http\Controllers\Admin;

use App\Repo\AdminRepo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class PasswordController extends Controller
{
    protected $repo_admin;

    public function __construct(AdminRepo $adminRepo)
    {
        $this->repo_admin = $adminRepo;
    }

    public function index()
  {
     $noti =  $this->repo_admin->listNotifybyType(1);
     return view('admin.notificaciones.password.index',compact('noti'));
  }

  public function updateview(Request  $request){
      $data = $this->repo_admin->updateView($request['idusuario']);
     return $data;

  }
}
