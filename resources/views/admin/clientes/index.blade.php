@extends('admin.layout')
@section('header')
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index-2.html">Inicio</a></li>
        <li class="breadcrumb-item"><a href="index-2.html">Products</a></li>
        <li class="breadcrumb-item"><span>Laptop with retina screen</span></li>
    </ul>
@stop
@section('content')
    <div class="layout-w">
    <div class="content-w">
    <div class="content-i">
        <div class="content-box">
  <div class="col-sm-12">
      <div class="element-wrapper">
          <h4 class="header">Lista de Clientes</h4>
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
                          <div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Cliente</h5>
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
                                          <div class="form-group"><label for="">Apellido</label><input class="form-control" name="apellido"
                                                                                                       type="text"></div>
                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group"><label for=""> Email</label><input class="form-control" name="email"
                                                                                                        type="text"></div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-sm-4">
                                          <div class="form-group"><label for=""> Direccion</label><input class="form-control" name="direccion"
                                                                                                        type="text"></div>
                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group"><label for="">Telefono</label><input class="form-control" name="telefono"
                                                                                                    type="number"></div>
                                      </div>
                                          <div class="col-sm-4">
                                              <div class="form-group"><label for=""> Fecha de Inicio</label>
                                                  <div class="date-input"><input name="finicio"
                                                              class="single-daterange form-control"
                                                              placeholder="Date of birth" type="text"
                                                              value="04/12/1978"></div>
                                              </div>
                                          </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-sm-4">
                                          <div class="form-group"><label for=""> IP de Router</label><input class="form-control" name="router"
                                                                                                   type="number"></div>
                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group"><label for="">IP de Antena</label><input class="form-control" name="antena"
                                                                                                       type="number"></div>
                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group"><label for=""> Tipo de Antena</label><select
                                                      class="form-control">
                                                  <option>NanoLoco M2</option>
                                                  <option>NanoLoco M5</option>
                                                  <option>Nanostation M2</option>
                                                  <option>Nanostation M5</option>
                                                  <option>Airgrid M2</option>
                                                  <option>Airgrid M5</option>
                                                  <option>Ltebeam M2</option>
                                                  <option>Litebeam M5</option>
                                                  <option>Nanobeam M2</option>
                                                  <option>Nanobeam M5</option>
                                                  <option>PowerBeam M2</option>
                                                  <option>PowerBeam M5</option>
                                                  <option>Antena del Usuario</option>
                                              </select></div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-sm-4">
                                      <div class="form-group"><label for=""> Plan</label><select
                                                  class="form-control">
                                              <option>Plan 25</option>
                                              <option>Plan 30</option>
                                              <option>Plan 35</option>
                                              <option>Plan 40</option>
                                              <option>Plan 45</option>
                                              <option>Plan 50</option>
                                              <option>Plan 55</option>
                                              <option>Plan 60</option>
                                              <option>Plan 65</option>
                                              <option>Plan 70</option>
                                              <option>Plan 75</option>
                                              <option>Plan 80</option>
                                              <option>Plan 85</option>
                                              <option>Plan 90</option>
                                              <option>Plan 100</option>
                                          </select></div>
                                          </div>
                                      <div class="col-sm-4">
                                          <div class="form-group"><label for="">DNI</label><input class="form-control" name="dni"
                                                                                                          placeholder="Usuario por el cual Ingresara al Portal" type="number"></div>
                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group"><label for="">Contraseña</label><input class="form-control" name="password"
                                                                                                          placeholder="Contraseña por el cual Ingresara al Portal" type="password"></div>
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
    </div>
    </div>
    </div>
    </div>
  @endsection
