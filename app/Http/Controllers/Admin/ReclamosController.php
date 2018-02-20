<?php

namespace App\Http\Controllers\Admin;

use App\Repo\AdminRepo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class ReclamosController extends Controller
{
    protected $repo_admin;

    public function __construct(AdminRepo $adminRepo)
    {
        $this->repo_admin = $adminRepo;
    }
  public function index()
  {
      $noti =  $this->repo_admin->listNotifybyType(2);

    return view('admin.notificaciones.reclamos.index',compact('noti'));
  }
}
