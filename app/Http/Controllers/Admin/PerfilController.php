<?php

namespace App\Http\Controllers\Admin;

use App\Repo\AdminRepo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class PerfilController extends Controller
{
    protected $repo_admin;

    public function __construct(AdminRepo $adminRepo)
    {
        $this->repo_admin = $adminRepo;
    }

    public function index()
  {
      $profile = $this->repo_admin->myProfile();
       return view('admin.perfil.index',compact('profile'));
  }
}
