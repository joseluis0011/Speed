@extends('admin.layout')
@section('header')
  <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('admin')}}">Inicio</a></li>
    <li class="breadcrumb-item"><span>Lista de Administradores</span></li>
  </ul>
@stop
@section('content')

  <div class="layout-w">
    <div class="content-w">
      <div class="content-i">
        <div class="content-box">
  <div class="col-sm-12">
    <div class="element-wrapper">
      <h4 class="header">Lista de Administrador</h4>
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
              <div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Administrador</h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                  <span aria-hidden="true"> &times;</span></button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="form-group"><label for=""> Nombre</label><input class="form-control" name="nombre"
                                                                                  type="text"></div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group"><label for="">Apellido</label><input class="form-control" name="apellido"
                                                                                   type="password"></div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group"><label for=""> Telefono</label><input class="form-control" name="telefono"
                                                                                 type="number"></div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group"><label for="">Email</label><input class="form-control" name="email"
                                                                                type="email"></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group"><label for=""> DNI</label><input class="form-control" name="dni"
                                                                                     type="number"></div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group"><label for=""> Password</label><input class="form-control" name="password"
                                                                               type="password"></div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group"><label for="">Estado</label><input class="form-control" name="estado"
                                                                                 type="text"></div>
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
            <th>Apellido</th>
            <th>Telefono</th>
            <th>DNI</th>
            <th>Password</th>
            <th>estado</th>
            <th>Email</th>
            <th>Acciones</th>
          </tr>
          </thead>
          <tfoot>
          <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th>DNI</th>
            <th>Password</th>
            <th>estado</th>
            <th>Email</th>
            <th>Acciones</th>

          </tr>
          </tfoot>
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
        </table><!--------------------
END - Table with actions
------------------            --><!--------------------
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
