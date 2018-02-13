<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReclamosController extends Controller
{
  public function index()
  {

    return view('admin.notificaciones.reclamos.index');
  }
}
