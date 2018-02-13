@extends('admin.layout')
@section('header')
  <!--breadcrumbs start-->
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <h5 class="breadcrumbs-title">Reclamos</h5>
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

  <!--DataTables example-->
  <div id="table-datatables">
    <h4 class="header">Area de Reclamos</h4>
    <div class="row">
      <div class="col s12 ">
        <table id="data-table-simple" class="responsive-table display" cellspacing="0">
          <thead>
              <tr>
                  <th>Nombre</th>
                  <th>DNI</th>
                  <th>Tipo de Reclamo</th>
                  <th>Comentario</th>
                 <th>Acciones</th>

              </tr>
          </thead>

          <tfoot>
              <tr>
                <th>Nombre</th>
                <th>DNI</th>
                <th>Tipo de Reclamo</th>
                <th>Comentario</th>
               <th>Acciones</th>
              </tr>
          </tfoot>

          <tbody>

          </tbody>
        </table>
      </div>
    </div>
  </div>

      @endsection
