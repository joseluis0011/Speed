<?php

namespace App\Http\Controllers\Admin;

use App\Repo\AdminRepo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class RegClientController extends Controller
{
    protected $repo_admin;
    public function __construct(AdminRepo $repo)
    {
        $this->repo_admin = $repo;
    }

    public function index()
  {
      $cli = $this->repo_admin->listClienteByAdmin();
      return view('admin.clientes.index',compact('cli'));
  }
  public function create()
  {
      $cli = $this->repo_admin->listClienteByAdmin();

      return view('admin.clientes.index',compact('cli'));
  }

  public function newuser(Request $request){
      $typeuser = $request['token_admin'];
     $user = $this->repo_admin->createUserByadmin($request);
      if($this->repo_admin->createClienteByAdmin($request,$user->idusuario)!=null){
          Session::flash('success','Creado correctamente');
          if($typeuser == 1){
              return redirect('/admin/administrador/');
          }
          return redirect('/admin/clientes/');
      }else{
          Session::flash('error','Error no se pudo crear el cliente');
          return back();
      }
  }
}
