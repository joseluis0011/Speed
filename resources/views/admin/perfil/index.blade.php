@extends('admin.layout')
@section('header')
  <!--breadcrumbs start-->
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <h5 class="breadcrumbs-title">Mi Perfil</h5>
        <ol class="breadcrumb">
          <li><a href="/">Inicio</a>
          </li>
        </ol>
      </div>
    </div>
  </div>
  <!--breadcrumbs end-->
@stop
@section('content')
  <style>
    .btn-config{
      position: absolute;
      top: 131px;
      right: 17px;
      z-index: 1;
    }
  </style>
  <div class="col s12 ">
      <div id="profile-card" class="card">
          <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="{{asset('resources/images/user-bg.jpg')}}" alt="user background">
          </div>
          <div class="card-content">
            <div  style="width: 100px;margin-left: auto;margin-right: auto;">
              <a href="{{route('admin.notificaciones.portal.index')}}" class="btn blue-grey btn-config">
                <i class="mdi-action-settings"></i>New Password</a>
              <img src="{{asset('resources/images/avatar.jpg')}}" alt="" class="circle responsive-img activator card-profile-image">
                <span class="card-title activator grey-text text-darken-4">{{$profile->nombre}}</span>
            </div>
            <br>
            <br>
            <div class="row">
              <div class="input-field col s4">
            <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> DNI</p>
                <span style="font-family: inherit">{{$profile->dni}}</span>
            </div>
            <div class="input-field col s4">
              <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> Direccion</p>
              <span style="font-family: inherit">{{$profile->persona[0]->direccion}}</span>
            </div>
            <div class="input-field col s4">
              <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> Telefono</p>
              <span style="font-family: inherit">{{$profile->persona[0]->telefono}}</span>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s4">
        <p><i class="mdi-communication-email cyan-text text-darken-2"></i> Fecha de Inicio</p>
              <span style="font-family: inherit">{{$profile->persona[0]->finicio}}</span>
          </div>
          <div class="input-field col s4">
            <p><i class="mdi-communication-email cyan-text text-darken-2"></i> Tipo de Antena</p>
            <span style="font-family: inherit">{{$profile->persona[0]->tantena}}</span>
          </div>
          <div class="input-field col s4">
            <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> Plan</p>
            <span style="font-family: inherit">{{$profile->persona[0]->plan}}</span>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s4">
      <p><i class="mdi-communication-email cyan-text text-darken-2"></i> Apellido</p>
            <span style="font-family: inherit"> {{$profile->apellido}}</span>
        </div>
        <div class="input-field col s4">
          <p><i class="mdi-communication-email cyan-text text-darken-2"></i> Email</p>
          <span style="font-family: inherit">{{$profile->persona[0]->email}}</span>
        </div>
        <div class="input-field col s4">
          <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> Estado</p>
          <span style="font-family: inherit">{{($profile->persona[0]->estado == '1')?'Activo':'Desactivo'}}</span>
        </div>
      </div>
          </div>
      </div>
  </div>

  @endsection
