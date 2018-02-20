@extends('admin.layout')
@section('header')
  <!--breadcrumbs start-->
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <h5 class="breadcrumbs-title">Clientes</h5>
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
  <div id="modal-fixed-footer">
    <h4 class="header">Enviar Pago</h4>
    <div class="row">
      <div class="col s12 m8 l9">
    <p></p>
    <p><a class="waves-effect waves-light btn modal-trigger  light-blue" href="{{route('admin.pagos.create')}}">Agregar</a>
    </p>

    </div>
    </div>
    </div>

    <!--DataTables example-->
    <div id="table-datatables">
      <h4 class="header">Historial de Pagos</h4>
      <div class="row">
        <div class="col s12 ">
          <table id="data-table-simple" class="responsive-table display" cellspacing="0">
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Mes</th>
                    <th>Monto</th>
                    <th>Comentario</th>
                   <th>Acciones</th>

                </tr>
            </thead>

            <tfoot>
                <tr>
                  <th>Usuario</th>
                  <th>Mes</th>
                  <th>Monto</th>
                  <th>Comentario</th>
                 <th>Acciones</th>
                </tr>
            </tfoot>

            <tbody>
            @foreach($pay as $pa)
              <tr>
                <td>{{$pa->persona->user->nombre}} {{$pa->persona->user->apellido}}</td>
                <td>{{$pa->mes}}</td>
                <td>{{$pa->monto}}</td>
                <td>{{$pa->comentario}}</td>
                <td>
                  <a href="#">edit</a>
                  <a href="#">delete</a>
                  <a href="#">view</a>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

  @endsection 
