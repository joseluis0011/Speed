<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PasswordController extends Controller
{
  public function index()
  {

    return view('admin.notificaciones.password.index');
  }
}
