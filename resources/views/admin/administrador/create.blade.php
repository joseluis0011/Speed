@extends('admin.layout')
@section('header')
  <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
    <li class="breadcrumb-item"><a href="index-2.html">Products</a></li>
    <li class="breadcrumb-item"><span>Laptop with retina screen</span></li>
  </ul>
@stop
@section('content')

      <div class="element-box">
        <form method="POST" class="col s12"  action="{{route('newuser')}}">
          {{ csrf_field() }}
          <h5 class="form-header">Default Layout</h5>
          <div class="form-desc">Discharge best employed your phase each the of shine. Be
            met even reason consider logbook redesigns. Never a turned interfaces among
            asking
          </div>
          <input type="hidden" name="token_admin" value="1">
          <div class="row">
            <div class="form-group">
              <i class="icon-user-ban"></i><i class="fi-contrast"></i>
              <input   type="text" name="name" class="form-control">
              <label for="first_name">Nombre</label>
            </div>
            <div class="form-group">
              <i class="icon-user-add"></i>
              <input  name="apellido" type="text" class="form-control">
              <label for="az">Apellido</label>
            </div>
            <div class="form-group">
              <i class="icon-phone"></i>
              <input  name="telefono" type="text" class="form-control">
              <label for="password">Telefono</label>
            </div>
          </div>
          <div class="row">
            <div class="form-group">
              <i class="icon-email-add"></i>
              <input  name="email" type="text" class="form-control">
              <label for="password">Email</label>
            </div>
            <div class="form-group">
              <i class="icon-wallet"></i>
              <input  name="dni" type="text" class="form-control">
              <label for="password">DNI</label>
            </div>

            <div class="form-group">
              <i class="icon-login"></i>
              <input  name="password" type="password" class="form-control">
              <label for="password">Password</label>
            </div>
          </div>
          <br>

          <div class="form-buttons-w">
            <button class="btn btn-primary btn-primary btn-block" type="submit"> Submit</button>
          </div>
        </form>
      </div>

  @endsection
