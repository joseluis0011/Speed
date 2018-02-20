@extends('admin.layout')
@section('header')
<!--breadcrumbs start-->
<div id="breadcrumbs-wrapper" class=" grey lighten-3">
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <h5 class="breadcrumbs-title">Crear Cliente</h5>
        <ol class="breadcrumb">
          <li><a href="{{route('admin')}}">Inicio</a>
          </li>
          <li><a href="{{route('admin.clientes.index')}}">lista de Clientes</a>
          </li>
          <li class="active">Crear</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--breadcrumbs end-->
<!--breadcrumbs end-->
@stop
@section('content')
  <div id="modal2" class="">
    <div class="modal-content">
      <div class="row">
        <div class="col s12 center">
          <h4>Registrar Nuevo Cliente</h4>
      </div>
      </div>
      <!-- Form with validation -->
      <div class="col s12 " >
          <div class="row">
            <form method="POST" class="col s12"  action="{{route('newuser')}}">
                {{ csrf_field() }}
              <div class="row">
                <div class="input-field col s2">
                  <i class="mdi-action-account-circle prefix"></i>
                  <input name="name" type="text" class="validate">
                  <label for="first_name">Nombre</label>
                </div>
                  <div class="input-field col s2">
                  <input name="apellido" type="text" class="validate">
                  <label for="first_name">Apellido</label>
                </div>

                <div class="input-field col s4">
                  <i class="mdi-action-payment prefix"></i>
                  <input name="dni" type="text" class="validate">
                  <label for="password">DNI</label>
                </div>
                <div class="input-field col s4">
                  <i class="mdi-maps-pin-drop prefix"></i>
                  <input name="direccion" type="text" class="validate">
                  <label for="password">Direccion</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s4">
                  <i class="mdi-communication-phone prefix"></i>
                  <input name="telefono" type="text" class="validate">
                  <label for="password">Telefono</label>
                </div>
                <div class="input-field col s4">
                <input type="date" name="finicio" class="datepicker">
                <label for="password">Fecha de Inicio</label>
              </div>
              <div class="input-field col s4">
                <i class="mdi-file-cloud-queue prefix"></i>
                <input name="router" type="text" class="validate">
                <label for="password">IP.Router</label>
              </div>
              </div>
              <div class="row">
                <div class="input-field col s4">
                  <i class="mdi-file-cloud-queue prefix"></i>
                  <input name="antena" type="text" class="validate">
                  <label for="password">IP.Antena<</label>
                </div>
                <div class="input-field col s4">
                  <select name="tantena">
                    <option value="" disabled selected>Eliga el Tipo de Antena</option>
                    <option value="1">Nanoloco M2</option>
                    <option value="1">Nanoloco M5</option>
                    <option value="1">Nanostation M2</option>
                    <option value="1">Nanostation M5</option>
                    <option value="2">airgrid m2</option>
                    <option value="2">airgrid m5</option>
                    <option value="3">Litebeam m2</option>
                    <option value="3">Litebeam m5</option>
                    <option value="3">Nanobeam m2</option>
                    <option value="3">Nanobeam m5</option>
                    <option value="3">Powerbeam m2</option>
                    <option value="3">Powerbeam m5</option>
                    <option value="3">Antena del Usuario</option>
                  </select>
                  <label>Eliga el Tipo de Antena</label>
                </div>
                <div class="input-field col s4">
                  <select name="tplan">
                    <option value="" disabled selected>Eliga el Plan</option>
                    <option value="1">Plan 1</option>
                    <option value="2">Plan 2</option>
                    <option value="3">Plan 3</option>
                  </select>
                  <label>Eliga el Plan</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s4">
                  <i class="mdi-hardware-keyboard-alt prefix"></i>
                  <input name="email" type="text" class="validate">
                  <label for="password">Email</label>
                </div>
                <div class="input-field col s4">
                  <i class="mdi-action-lock prefix"></i>
                  <input name="password" type="password" class="validate">
                  <label for="password">Password<</label>
                </div>
                <div class="input-field col s4">
                <div class="switch">
                  <label>
                    Inactivo
                    <input name="state" type="checkbox">
                    <span class="lever"></span> Activo
                  </label>
                </div>
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
