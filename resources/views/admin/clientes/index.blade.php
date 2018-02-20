@extends('admin.layout')
@section('header')
  <!--breadcrumbs start-->
  <div id="breadcrumbs-wrapper" class=" grey lighten-3">
    <div class="container">
      <div class="row">
        <div class="col s12 m12 l12">
          <h5 class="breadcrumbs-title">Clientes</h5>
          <ol class="breadcrumb">
            <li><a href="{{route('admin')}}">Inicio</a>
            </li>
            <li class="active">Lista de Clientes</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!--breadcrumbs end-->
@stop
@section('content')
  <div id="modal-fixed-footer">
    <h4 class="header">Crear Clientes</h4>
    <div class="row">
      <div class="col s12 m8 l9">
    <p></p>
    <p><a class="waves-effect waves-light btn modal-trigger  light-blue" href="{{route('admin.clientes.create')}}">Agregar</a>
    </p>

  </div>
  </div>
  </div>
  <!--DataTables example-->
  <div id="table-datatables">
    <h4 class="header">Lista de Clientes</h4>
    <div class="row">
      <div class="col s12">
        <table id="data-table-simple" class="responsive-table display" cellspacing="0">
          <thead>
              <tr>
                  <th>Nombres</th>
                  <th>DNI</th>
                  <th>Direccion</th>
                  <th>Telefono</th>
                  <th>F.Inicio</th>
                  <th>IP.Router</th>
                  <th>IP.Antena</th>
                  <th>Tipo de Antena</th>
                  <th>Plan</th>
                  <th>Estado</th>
                  <th>Acciones</th>
              </tr>
          </thead>

          <tfoot>
              <tr>
                <th>Nombres</th>
                <th>DNI</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>F.Inicio</th>
                <th>IP.Router</th>
                <th>IP.Antena</th>
                <th>Tipo de Antena</th>
                <th>Plan</th>
                <th>Estado</th>
                <th>Acciones</th>
              </tr>
          </tfoot>

          <tbody>
            @foreach($cli as $cl)
                <tr>
                    <td>{{$cl->user->nombre}}</td>
                    <td>{{$cl->user->dni}}</td>
                    <td>{{$cl->direccion}}</td>
                    <td>{{$cl->telefono}}</td>
                    <td>{{$cl->finicio}}</td>
                    <td>{{$cl->router}}</td>
                    <td>{{$cl->antena}}</td>
                    <td>{{$cl->tantena}}</td>
                    <td>{{$cl->plan}}</td>
                    <td>{{($cl->estado == 1)?'Activo':'Inactivo'}}</td>
                    <td>
                        <a class="  btn-success">Edid</a>
                        <a class="  btn-danger">view</a>
                        <a class="  btn-info">Deñlete</a>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  @endsection
