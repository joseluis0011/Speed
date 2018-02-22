@extends('admin.layout')
@section('header')
  <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
    <li class="breadcrumb-item"><a href="index-2.html">Products</a></li>
    <li class="breadcrumb-item"><span>Laptop with retina screen</span></li>
  </ul>
@stop
@section('content')
  <a class="waves-effect waves-light btn modal-trigger  light-blue" href="{{route('admin.administrador.create')}}">Agregar</a>


  <div class="col-sm-12">
    <div class="element-wrapper">
      <h4 class="header">Lista de Administrador</h4>
      <div class="element-box-tp"><!--------------------
START - Controls Above Table
-------------------->
        <div class="controls-above-table">
          <div class="row">
            <div class="col-sm-6"><a class="btn btn-sm btn-secondary" href="#">Download
                CSV</a><a class="btn btn-sm btn-secondary" href="#">Archive</a><a class="btn btn-sm btn-danger" href="#">Delete</a></div>
            <div class="col-sm-6">
              <form class="form-inline justify-content-sm-end"><input class="form-control form-control-sm rounded bright" placeholder="Search" type="text"><select class="form-control form-control-sm rounded bright">
                  <option selected="selected" value="">Select Status</option>
                  <option value="Pending">Pending</option>
                  <option value="Active">Active</option>
                  <option value="Cancelled">Cancelled</option>
                </select></form>
            </div>
          </div>
        </div><!--------------------
END - Controls Above Table
------------------          --><!--------------------
START - Table with actions
------------------  -->
        <div class="table-responsive">
          <table class="table table-bordered table-lg table-v2 table-striped">
            <thead>
            <tr>
              <th class="text-center">
                <input class="form-control" type="checkbox">
              </th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Telefono</th>
              <th>DNI</th>
              <th>estado</th>
              <th>Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($admin as $ad)
              <tr>
                <td>{{$ad->user->nombre}}</td>
                <td>{{$ad->user->apellido}}</td>
                <td>{{$ad->telefono}}</td>
                <td>{{$ad->user->dni}}</td>
                <td class="text-center">
                  <div class="status-pill {{($ad->estado == 'on')?'green':'red'}}" data-title="Complete" data-toggle="tooltip" data-original-title="" title=""></div>
                </td>
                <td>{{$ad->email}}</td>
                <td class="row-actions"><a href="#"><i class="os-icon os-icon-ui-49"></i></a><a href="#"><i class="os-icon os-icon-grid-10"></i></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a></td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div><!--------------------
END - Table with actions
------------------            --><!--------------------
START - Controls below table
------------------  -->
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
        </div><!--------------------
END - Controls below table
--------------------></div>
    </div>
  </div>
  @endsection
