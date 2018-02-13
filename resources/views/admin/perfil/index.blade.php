@extends('admin.layout')
@section('header')
  <!--breadcrumbs start-->
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <h5 class="breadcrumbs-title">Mi Perfil</h5>
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
  <div class="col s12 ">
      <div id="profile-card" class="card">
          <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="{{asset('resources/images/user-bg.jpg')}}" alt="user background">
          </div>

          <div class="card-content">
            <div  style="width: 100px;margin-left: auto;margin-right: auto;">
              <img src="{{asset('resources/images/avatar.jpg')}}" alt="" class="circle responsive-img activator card-profile-image">
                <span class="card-title activator grey-text text-darken-4">Nombres</span>

            </div>
            <br>
            <br>
            <div class="row">
              <div class="input-field col s4">
            <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> DNI</p>
            </div>
            <div class="input-field col s4">
              <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> Direccion</p>
            </div>
            <div class="input-field col s4">
              <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> Telefono</p>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s4">
        <p><i class="mdi-communication-email cyan-text text-darken-2"></i> Fecha de Inicio</p>
          </div>
          <div class="input-field col s4">
            <p><i class="mdi-communication-email cyan-text text-darken-2"></i> Tipo de Antena</p>
          </div>
          <div class="input-field col s4">
            <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> Plan</p>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s4">
      <p><i class="mdi-communication-email cyan-text text-darken-2"></i> Usuario</p>
        </div>
        <div class="input-field col s4">
          <p><i class="mdi-communication-email cyan-text text-darken-2"></i> clave</p>
        </div>
        <div class="input-field col s4">
          <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> Estado</p>
        </div>
      </div>
          </div>

      </div>
  </div>

  @endsection
