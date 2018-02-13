<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class RegAdminController extends Controller
{
  public function index()
  {

    return view('admin.administrador.index');
  }
  public function create()
  {

    return view('admin.administrador.create');
  }
}
