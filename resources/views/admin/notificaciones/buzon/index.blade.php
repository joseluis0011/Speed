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
                                          <div class="col-sm-6"><a class="btn btn-sm btn-secondary" href="#">Descargar
                                                  en Excel</a><a class="btn btn-sm btn-danger" href="#">Imprimir</a></div>

                                      </div>
                                  </div><!--
END - Controls Above Table
------------------          --><!--------------------
START - Table with actions
------------------  -->
                                  <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" >
                                      <thead>
                                      <tr>
                                          <th>Nombre</th>
                                          <th>Apellido</th>
                                          <th>Direccion</th>
                                          <th>Telefono</th>
                                          <th>Plan</th>
                                          <th>Comentario</th>
                                          <th>Acciones</th>
                                      </tr>
                                      </thead>
                                      <tfoot>
                                      <tr>
                                          <th>Nombre</th>
                                          <th>Apellido</th>
                                          <th>Direccion</th>
                                          <th>Telefono</th>
                                          <th>Plan</th>
                                          <th>Comentario</th>
                                          <th>Acciones</th>
                                      </tr>
                                      </tfoot>
                                      <tbody>
                                      @foreach($noti as $no)
                                          @if($no->view == 'no')
                                              <tr style="background: #FEA47F;">
                                          @else
                                              <tr style="background: #9AECDB;">
                                                  @endif
                                              <td>{{$no->nombre}}</td>
                                              <td>{{$no->apellido}}</td>
                                              <td>{{$no->telefono}}</td>
                                              <td>{{$no->direccion}}</td>
                                              <td>{{$no->plan}}</td>
                                              <td>{{$no->comentario}}</td>
                                                  <td>
                                                      @if($no->view == 'no')
                                                          <a onclick="view('{{$no->idnotificaciones}}')" class="btn">view</a>
                                                      @else
                                                          <a   class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a>
                                                      @endif
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
@section('script_botton')
    <script>
        function edit(id) {
            $.get('{{route('getPerson')}}?id='+id,function (data) {
                $('.f_id_per').val(data.idpersona);
                $('.f_id_user').val(data.user.idusuario);
                $('.f_name').val(data.user.nombre);
                $('.f_apellido').val(data.user.apellido);
                $('.f_telefono').val(data.telefono);
                $('.f_dni').val(data.user.dni);
                $('.f_email').val(data.email);
                $('.f_password').val('**********');
                $('.f_password').prop('disabled',true);
                $('.f_password').attr('name', '');
                $('.f_state').val(data.estado);
                $('.add-admin-modal').modal('show');
            })
        }

    </script>
@endsection
