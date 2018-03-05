<?php

namespace App\Http\Controllers\Admin;

use App\Repo\AdminRepo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
class RegAdminController extends Controller
{
    protected  $repo_admin;
    public function __construct(AdminRepo $repo)
    {
        $this->repo_admin = $repo;
    }

    public function index()
  {
     $admin =  $this->repo_admin->listAdmin();
    return view('admin.administrador.index',compact('admin'));

  }
  public function create()
  {
      $admin =  $this->repo_admin->listAdmin();
      return view('admin.administrador.index',compact('admin'));
  }
}
