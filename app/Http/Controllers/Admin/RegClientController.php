<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegClientController extends Controller
{
  public function index()
  {

    return view('admin.clientes.index');
  }
  public function create()
  {

    return view('admin.clientes.create');
  }
}
