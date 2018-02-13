<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagosController extends Controller
{
  public function index()
  {

    return view('admin.pagos.index');
  }
  public function create()
  {

    return view('admin.pagos.create');
  }
}
