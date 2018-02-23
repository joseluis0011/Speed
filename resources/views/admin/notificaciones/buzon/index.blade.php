@extends('admin.layout')
@section('header')
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin')}}">Inicio</a></li>
        <li class="breadcrumb-item"><span>Solicitudes de Internet</span></li>
    </ul>
@stop
  @section('content')

      <div class="layout-w">
          <div class="content-w">
              <div class="content-i">
                  <div class="content-box">
                      <div class="col-m-12">
                          <div class="element-wrapper">
                              <h4 class="header">Solicitudes de Internet</h4>
                              <div class="element-box-tp"><!--------------------
START - Controls Above Table-------------------->
                                  <div class="controls-above-table">
                                      <div class="row">
                                          <div class="col-sm-12"><a class="btn btn-sm btn-secondary" href="#">Download
                                                  CSV</a><a class="btn btn-sm btn-secondary" href="#">Archive</a><a class="btn btn-sm btn-danger" href="#">Delete</a></div>
                                          <div class="col-sm-12">
                                              <form class="form-inline justify-content-sm-end"><input class="form-control form-control-sm rounded bright" placeholder="Search" type="text"><select class="form-control form-control-sm rounded bright">
                                                      <option selected="selected" value="">Select Status</option>
                                                      <option value="Pending">Pending</option>
                                                      <option value="Active">Active</option>
                                                      <option value="Cancelled">Cancelled</option>
                                                  </select></form>
                                          </div>
                                      </div>
                                  </div><!--
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
                                              <th>Direccion</th>
                                              <th>Telefono</th>
                                              <th>Plan</th>
                                              <th>Comentario</th>
                                              <th>Acciones</th>
                                          </tr>
                                          </thead>
                                          <tbody>

                                              <tr>
                                                  <td> </td>
                                                  <td> </td>
                                                  <td> </td>
                                                  <td>  </td>
                                                  <td class="text-center">
                                                      <div class="status-pill  " data-title="Complete" data-toggle="tooltip" data-original-title="" title=""></div>
                                                  </td>
                                                  <td> </td>
                                                  <td> </td>
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
