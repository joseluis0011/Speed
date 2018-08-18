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
                        <form method="POST" class="col s12"  action="{{route('newpago')}}">
                            {{ csrf_field() }}
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group"><label for=""> Cliente</label>
                      <select class="form-control" name="idpersona">
                          <option value="" disabled selected>Eliga el Usuario</option>
                          @foreach($cli as $cl)
                              <option class="badge-dni" value="{{$cl->idpersona}}">{{$cl->user->nombre}} -- DNI -- {{$cl->user->dni}}</option>
                          @endforeach
                    </select></div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group"><label for=""> Mes</label>
                      <select class="form-control" name="mes">
                          <option value="" disabled selected>Eliga el Mes</option>
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
                  <div class="form-group"><label for=""> Monto</label>
                      <select name="monto"
                            class="form-control">
                          <option value="" disabled selected>Eliga el Monto</option>
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
                  <div class="form-group"><label for=""> Comentario</label><input class="form-control" name="comentario"
                                                                                  type="text"></div>
                </div>
              </div>


            </form>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal" type="button">
              Close
            </button>
            <button class="btn btn-primary" type="submit" name="action"> Enviar</button>
          </div>
        </div>
      </div>
    </div>
    <!--END MODAL -->
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
              <th>Cliente</th>
              <th>Mes</th>
              <th>Monto</th>
              <th>Fecha</th>
              <th>Comentario</th>
              <th>Acciones</th>
          </tr>
          </thead>
          <tfoot>
          <tr>
              <th>Cliente</th>
              <th>Mes</th>
              <th>Monto</th>
              <th>Fecha</th>
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
