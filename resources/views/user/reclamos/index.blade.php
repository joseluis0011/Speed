@extends('user.layout')
@section('header')
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Inicio</a></li>
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
                            <h4 class="header">Historial de Reclamos</h4>
                            <div class="element-box-tp"><!--------------------
START - Controls Above Table
-------------------->
                                <!--Large modal-->
                                <button class="mr-2 mb-2 btn btn-primary" data-target=".bd-example-modal-lg"
                                        data-toggle="modal"> Hacer Reclamo
                                </button>
                                <div aria-hidden="true" aria-labelledby="myLargeModalLabel"
                                     class="modal fade bd-example-modal-lg" role="dialog" tabindex="-1">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Enviar Nuevo Reclamo</h5>
                                                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                                    <span aria-hidden="true"> &times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group"><label for=""> Nombre</label><input class="form-control" name="nombre"
                                                                                                                        type="text"></div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group"><label for="">DNI</label><input class="form-control" name="dni"
                                                                                                                    type="number"></div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group"><label for=""> Tipo de Reclamo</label><select
                                                                        class="form-control">
                                                                    <option>Mi Internet Esta Lento</option>
                                                                    <option>No hay Internet</option>
                                                                    <option>Problemas con el Wi-fi</option>
                                                                    <option>Problemas con el Pago del Internet</option>
                                                                </select></div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group"><label for=""> Comentario</label><input class="form-control" name="comentario"
                                                                                                                            type="text"></div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group"><label for="">Fecha</label><input class="form-control" name="fecha"
                                                                                                          placeholder="jhordy esto tiene que ser por defecto de ese dia" type="email"></div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" data-dismiss="modal" type="button">
                                                    Close
                                                </button>
                                                <button class="btn btn-primary" type="button"> Enviar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--END MODAL -->
                                <div class="controls-above-table">
                                    <div class="row">
                                        <div class="col-sm-6"><a class="btn btn-sm btn-secondary" href="#">Download
                                                en Excel</a><a class="btn btn-sm btn-secondary" href="#">Imprimir</a></div>

                                    </div>
                                </div><!--------------------
END - Controls Above Table
------------------          -->

                                <!--------------------
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
