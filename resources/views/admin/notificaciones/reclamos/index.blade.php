@extends('admin.layout')
@section('header')
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin')}}">Inicio</a></li>
        <li class="breadcrumb-item"><span>Area de Reclamos</span></li>
    </ul>
@stop
@section('content')

    <div class="layout-w">
        <div class="content-w">
            <div class="content-i">
                <div class="content-box">
                    <div class="col-sm-12">
                        <div class="element-wrapper">
                            <h4 class="header">Area de Reclamos</h4>
                            <div class="element-box-tp"><!--------------------
START - Controls Above Table
-------------------->
                                <div class="controls-above-table">
                                    <div class="row">
                                        <div class="col-sm-6"><a class="btn btn-sm btn-secondary" href="#">Descargar en Excel</a><a class="btn btn-sm btn-secondary" href="#">Imprimir</a></div>

                                    </div>
                                </div><!--------------------
END - Controls Above Table
------------------          --><!--------------------
START - Table with actions
------------------  -->
                                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" >
                                    <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>DNI</th>
                                        <th>Tipo de reclamo</th>
                                        <th>Fecha</th>
                                        <th>Comentario</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>DNI</th>
                                        <th>Tipo de reclamo</th>
                                        <th>Fecha</th>
                                        <th>Comentario</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    </tbody>
                                </table><!--------------------
END - Table with actions
------------------            --> <!--------------------
END - Controls below table
--------------------></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

      @endsection
