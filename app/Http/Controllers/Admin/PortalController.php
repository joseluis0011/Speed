<?php

namespace App\Http\Controllers\Admin;

use App\Repo\AdminRepo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class PortalController extends Controller
{
    protected  $repo_admin;

    public function __construct(AdminRepo $adminRepo)
    {
        $this->repo_admin = $adminRepo;
    }

    public function index()
  {

    return view('admin.notificaciones.portal.index');
  }

  public function changePassword(Request $request){
      if($this->repo_admin->changePasword($request) != null){
          Session::flash('password_success','Password cambiado correctamente');
         return back();
      }else{
          Session::flash('error_portal','Password no coinsiden');
         return back();
      }
  }
}
