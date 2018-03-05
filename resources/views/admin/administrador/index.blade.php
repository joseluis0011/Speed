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
        <button class="mr-2 mb-2 btn btn-primary" data-target=".add-admin-modal"
                data-toggle="modal"> Agregar
        </button>
        <div aria-hidden="true" aria-labelledby="myLargeModalLabel"
             class="modal fade add-admin-modal" role="dialog" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Administrador</h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                  <span aria-hidden="true"> &times;</span></button>
              </div>
              <div class="modal-body">
                <form method="POST" class="col s12 formrestore" action="{{route('restore')}}">
                  {{ csrf_field() }}
                  <input class="personaid" type="hidden" name="id_per" >
                 </form>
                <form method="POST" class="col s12 formnewadmin" action="{{route('newuser')}}">
                  {{ csrf_field() }}
                  <input type="hidden" name="token_admin" value="1">
                  <input class="f_id_user" type="hidden" name="id_user" >
                  <input class="f_id_per" type="hidden" name="id_per" >
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="form-group"><label for=""> Nombre</label>
                        <input class="form-control f_name" name="name" type="text"></div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group"><label for="">Apellido</label>
                        <input class="form-control f_apellido" name="apellido" type="text"></div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group"><label for=""> Telefono</label>
                        <input class="form-control f_telefono" name="telefono"  type="number"></div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group"><label for="">Email</label>
                        <input class="form-control f_email" name="email" type="email"></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group"><label for=""> DNI</label>
                        <input class="form-control f_dni" name="dni" type="number"></div>
                    </div>
                    <div class="col-sm-4">
                      <div class="fcol-sm-4"><label for=""> Password</label>
                        <input class="form-control f_password" name="password" type="password"></div>
                    </div>
                    <div class="col-sm-4"><label for="">Estado</label>
                      <select name="state" class="form-control f_state">
                        <option value="on" selected>Activo</option>
                        <option value="off">Inactivo</option>
                      </select></div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal" type="button">
                  Close
                </button>
                <button class="btn btn-primary btn-send" type="button"> Guardar</button>
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
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Telefono</th>
              <th>DNI</th>
              <th>estado</th>
              <th>Email</th>
              <th></th>
            </tr>
            </thead>
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
                <td class="row-actions">
                  <a onclick="edit({{$ad->idpersona}})" class="primary" href="#"><i class="os-icon os-icon-ui-49"></i></a>
                  <a onclick="del({{$ad->idpersona}},$(this))" class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a>
                </td>
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
@section('script_botton')
  <script>
    var stateModal = '{{(request()->path() == "admin/administrador/create")?'show':'hide'}}';
    $('.add-admin-modal').modal(stateModal);
    $('.btn-send').click(function () {
      $('.formnewadmin').submit();
    });

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

    function del(id,row) {
      iziToast.question({
        timeout: 20000,
        close: false,
        overlay: true,
        toastOnce: true,
        id: 'question',
        zindex: 999,
        title: 'Hey',
        message: 'Deseas eliminar el registro ?',
        position: 'center',
        buttons: [
          ['<button><b>YES</b></button>', function (instance, toast) {
            $.get('{{route('delPersona')}}?id='+id,function (data) {
              if(data){
                 iziToast.success({
                   title: 'OK',
                   message: 'El usuario fue eliminado temporalmente si deseas restaurar hacer click ',
                   buttons: [
                    ['<button><b>Aqui</b></button>', function (instance, toast) {
                        $('.personaid').val(id);
                        $('.formrestore').submit();
                      instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');

                    }, true]],
                });
                row.closest('tr').remove();
              }
              instance.hide(toast,{ transitionOut: 'fadeOut' },'button');
            });
          }, true],
          ['<button>NO</button>', function (instance, toast) {
            instance.hide(toast,{ transitionOut: 'fadeOut' },'button');
          }]
        ]
      });



    }



  </script>

@endsection
