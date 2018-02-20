@extends('admin.layout')
@section('header')
  <!--breadcrumbs start-->
  <div id="breadcrumbs-wrapper" class=" grey lighten-3">
    <div class="container">
      <div class="row">
        <div class="col s12 m12 l12">
          <h5 class="breadcrumbs-title">Crear Administrador</h5>
          <ol class="breadcrumb">
            <li><a href="{{route('admin')}}">Inicio</a>
            </li>
            <li><a href="{{route('admin.administrador.index')}}">lista de Administradores</a>
            </li>
            <li class="active">Crear</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!--breadcrumbs end-->
@stop
@section('content')
  <div id="" class="">
    <div class="modal-content">
      <div class="row">
        <div class="col s12 center">
          <h4>Registrar Nuevo Administrador</h4>
      </div>
      </div>
      <!-- Form with validation -->
      <div class="col s12 " >
          <div class="row">
            <form method="POST" class="col s12"  action="{{route('newuser')}}">
              {{ csrf_field() }}
              <input type="hidden" name="token_admin" value="1">
              <div class="row">
                <div class="input-field col s4">
                  <i class="mdi-action-account-circle prefix"></i>
                  <input  type="text" name="name" class="validate">
                  <label for="first_name">Nombre</label>
                </div>
                <div class="input-field col s4">
                  <i class="mdi-action-account-child prefix"></i>
                  <input  name="apellido" type="text" class="validate">
                  <label for="az">Apellido</label>
                </div>
                <div class="input-field col s4">
                  <i class="mdi-communication-phone prefix"></i>
                  <input  name="telefono" type="text" class="validate">
                  <label for="password">Telefono</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                  <i class="mdi-hardware-keyboard-alt prefix"></i>
                  <input  name="email" type="text" class="validate">
                  <label for="password">Email</label>
                </div>
                <div class="input-field col s6">
                  <i class="mdi-hardware-keyboard-alt prefix"></i>
                  <input  name="dni" type="text" class="validate">
                  <label for="password">DNI</label>
                </div>

                <div class="input-field col s6">
                  <i class="mdi-action-lock prefix"></i>
                  <input  name="password" type="password" class="validate">
                  <label for="password">Password<</label>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col s12 center">
                  <button class="btn cyan waves-effect waves-light" type="submit">Agregar
                    <i class="mdi-content-send right"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
