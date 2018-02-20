@extends('admin.layout')
@section('header')
  <!--breadcrumbs start-->
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <h5 class="breadcrumbs-title">Cambio de Contraseña</h5>
        <ol class="breadcrumb">
          <li><a href="index.html">Inicio</a>
          </li>
        </ol>
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
          <h4>Cambio de Contraseña</h4>
      </div>
      </div>
      <!-- Form with validation -->
      <div class="col s12 " >
          <div class="row">
            <form method="POST" class="col s12"  action="{{route('changePassword')}}">
              {{ csrf_field() }}
              <div class="row">
                <div class="input-field col s4">
                  <i class="mdi-action-account-child prefix"></i>
                  <input name="password"  type="password" class="validate">
                  <label for="az">Contraseña Actual</label>
                </div>
                <div class="input-field col s4">
                  <i class="mdi-action-account-child prefix"></i>
                  <input name="new_password"  type="password" class="validate">
                  <label for="az">Nueva Contraseña</label>
                </div>

              </div>

              <br>
              <div class="row">
                <div class="col s12 center">
                  <button class="btn cyan waves-effect waves-light" type="submit">Cambiar
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
