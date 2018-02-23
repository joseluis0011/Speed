@extends('admin.layout')
@section('header')
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin')}}">Inicio</a></li>
        <li class="breadcrumb-item"><span>Historial de Pagos</span></li>
    </ul>
@stop
@section('content')
  <div class="layout-w">
    <div class="content-w">
      <div class="content-i">
        <div class="content-box">
          <div class="col-sm-12">
            <div class="element-wrapper">
              <h4 class="header">Historial de Pagos</h4>
              <div class="element-box-tp"><!--------------------
START - Controls Above Table
-------------------->
                <!--Large modal-->
                <button class="mr-2 mb-2 btn btn-primary" data-target=".bd-example-modal-lg"
                        data-toggle="modal"> Agregar
                </button>
                <div aria-hidden="true" aria-labelledby="myLargeModalLabel"
                     class="modal fade bd-example-modal-lg" role="dialog" tabindex="-1">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Asignar Nuevo Pago</h5>
                        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                          <span aria-hidden="true"> &times;</span></button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group"><label for=""> Usuario</label><select
                                        class="form-control">
                                  <option>user1</option>
                                  <option>user1</option>
                                </select></div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group"><label for=""> Mes</label><select
                                        class="form-control">
                                  <option>Enero</option>
                                  <option>Febrero</option>
                                  <option>Marzo</option>
                                  <option>Abril</option>
                                  <option>Mayo</option>
                                  <option>Junio</option>
                                  <option>Julio</option>
                                  <option>Agosto</option>
                                  <option>Setiembre</option>
                                  <option>Octubre</option>
                                  <option>Noviembre</option>
                                  <option>Diciembre</option>
                                </select></div>
                            </div>

                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group"><label for=""> Monto</label><select
                                        class="form-control">
                                  <option>S/.25</option>
                                  <option>S/.30</option>
                                  <option>S/.35</option>
                                  <option>S/.40</option>
                                  <option>S/.45</option>
                                  <option>S/.50</option>
                                  <option>S/.55</option>
                                  <option>S/.60</option>
                                  <option>S/.65</option>
                                  <option>S/.70</option>
                                  <option>S/.75</option>
                                  <option>S/.80</option>
                                  <option>S/.85</option>
                                  <option>S/.90</option>
                                  <option>S/.100</option>
                                </select></div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group"><label for=""> Comentario</label><input class="form-control" name="telefono"
                                                                                              type="number"></div>
                            </div>
                          </div>


                        </form>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal" type="button">
                          Close
                        </button>
                        <button class="btn btn-primary" type="button"> Guardar</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!--END MODAL -->
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

                      <tr>
                           <td class="row-actions"><a href="#"><i class="os-icon os-icon-ui-49"></i></a><a href="#"><i class="os-icon os-icon-grid-10"></i></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a></td>
                      </tr>
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
        </div>
      </div>
    </div>
  </div>
  @endsection 
