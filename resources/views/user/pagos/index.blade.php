@extends('user.layout')
@section('header')
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Inicio</a></li>
        <li class="breadcrumb-item"><span>Lista de Facturacion</span></li>
    </ul>

@stop
@section('content')
    <div class="layout-w">
        <div class="content-w">
            <div class="content-i">
                <div class="content-box">
                    <div class="col-sm-12">
                        <div class="element-wrapper">
                            <h4 class="header">Lista de Facturacion</h4>
                            <div class="element-box-tp"><!--------------------
START - Controls Above Table
-------------------->
                                <div class="controls-above-table">
                                    <div class="row">
                                        <div class="col-sm-6"><a class="btn btn-sm btn-secondary" href="#">Download
                                                en Excel</a><a class="btn btn-sm btn-secondary" href="#">Imprimir</a></div>

                                    </div>
                                </div><!--------------------
END - Controls Above Table
------------------          --><!--------------------
START - Table with actions
------------------  -->
                                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Mes</th>
                                        <th>Monto</th>
                                        <th>Fecha</th>
                                        <th>Comentario</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Mes</th>
                                        <th>Monto</th>
                                        <th>Fecha</th>
                                        <th>Comentario</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>editar</td>
                                        <td>editar</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>editar</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>editar</td>
                                    </tr>

                                    </tbody>
                                </table>

                                <!--------------------
START - Controls below table
------------------  -->
                               <!--------------------
END - Controls below table
--------------------></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
