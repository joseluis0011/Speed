@extends('admin.layout')
@section('header')
  <!--breadcrumbs start-->
  <div id="breadcrumbs-wrapper" class=" grey lighten-3">
    <div class="container">
      <div class="row">
        <div class="col s12 m12 l12">
          <h5 class="breadcrumbs-title">Administrador</h5>
          <ol class="breadcrumb">
            <li><a href="{{route('admin')}}">Inicio</a>
            </li>
            <li class="active">Lista de Administrador</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!--breadcrumbs end-->
@stop
@section('content')
  <div id="modal-fixed-footer">
    <h4 class="header">Crear Administrador</h4>
    <div class="row">
      <div class="col s12 m8 l9">
    <p></p>
    <p><a class="waves-effect waves-light btn modal-trigger  light-blue" href="{{route('admin.administrador.create')}}">Agregar</a>
    </p>

  </div>
  </div>
  </div>
  <!--DataTables example-->
  <div id="table-datatables">
    <h4 class="header">Lista de Administrador</h4>
    <div class="row">
      <div class="col s12">
        <table id="data-table-simple" class="responsive-table display" cellspacing="0">
          <thead>
              <tr>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Telefono</th>
                  <th>Usuario</th>
                  <th>Clave</th>

              </tr>
          </thead>

          <tfoot>
              <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Usuario</th>
                <th>Clave</th>
              </tr>
          </tfoot>

          <tbody>

          </tbody>
        </table>
      </div>
    </div>
  </div>
  @endsection
