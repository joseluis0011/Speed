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
                                  en Excel</a><a class="btn btn-sm btn-danger" href="#">Imprimir</a></div>

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
                          <th>Mes</th>
                          <th>Monto</th>
                          <th>Comentario</th>
                          <th>Acciones</th>
                      </tr>
                      </thead>
                      <tfoot>
                      <tr>
                          <th>Nombre</th>
                          <th>Mes</th>
                          <th>Monto</th>
                          <th>Comentario</th>
                          <th>Acciones</th>
                      </tr>
                      </tfoot>
                      <tbody>

                      </tbody>
                  </table><!--------------------
END - Table with actions
------------------            --> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection 
