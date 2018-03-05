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

  <div class="table-responsive">
    <table class="table table-responsive table-bordered table-lg table-v2 table-striped">
      <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Fecha de Inicio</th>
        <th>IP Router</th>
        <th>IP antena</th>
        <th>Tipo de Antena</th>
        <th>Plan</th>
        <th>DNI</th>
        <th>Contraseña</th>
        <th>Estado</th>
        <th>Acciones</th>
      </tr>
      </thead>
      <tbody>
      @foreach($cli as $ad)
        <tr>
          <td>{{$ad->user->nombre}}</td>
          <td>{{$ad->user->apellido}}</td>
          <td>{{$ad->telefono}}</td>
          <td>{{$ad->user->dni}}</td>
          <td class="text-center">
            <div class="status-pill {{($ad->estado == 'on')?'green':'red'}}" data-title="Complete" data-toggle="tooltip" data-original-title="" title=""></div>
          </td>
          <td>{{$ad->email}}</td>
          <td>{{$ad->email}}</td>
          <td>{{$ad->email}}</td>
          <td>{{$ad->email}}</td>
          <td>{{$ad->email}}</td>
          <td>{{$ad->email}}</td>
          <td>{{$ad->email}}</td>
          <td>{{$ad->email}}</td>
          <td class="row-actions"><a href="#"><i class="os-icon os-icon-ui-49"></i></a><a href="#"><i class="os-icon os-icon-grid-10"></i></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a></td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
  <div class="controls-below-table">
    <div class="table-records-info">Showing records 1 - 5</div>
    <div class="table-records-pages">
      <ul>
        <li><a href="#">Previous</a></li>
        <li><a class="current" href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">Next</a></li>
      </ul>
    </div>
  </div>
@endsection
