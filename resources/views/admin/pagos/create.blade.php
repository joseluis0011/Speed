@extends('admin.layout')
@section('header')
  <!--breadcrumbs start-->
  <div id="breadcrumbs-wrapper" class=" grey lighten-3">
    <div class="container">
      <div class="row">
        <div class="col s12 m12 l12">
          <h5 class="breadcrumbs-title">Control de Pago</h5>
          <ol class="breadcrumb">
            <li><a href="{{route('admin')}}">Inicio</a>
            </li>
            <li><a href="{{route('admin.pagos.index')}}">lista de Pagos</a>
            </li>
            <li class="active">Crear</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!--breadcrumbs end-->
@stop
@section('content')
  <div id="modal2" class="">
    <div class="modal-content">
      <div class="row">
        <div class="col s12 center">
          <h4>Notificar el Pago</h4>
      </div>
      </div>
      <!-- Form with validation -->
      <div class="col s12 " >
          <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s6">
                  <select>
                    <option value="" disabled selected>Eliga el Usuario</option>
                    <option value="1">Usuario 1</option>
                    <option value="2">Usuario 2</option>
                    <option value="3">Usuario 3</option>
                  </select>
                  <label>Usuario</label>
                </div>
                <div class="input-field col s6">
                  <select>
                    <option value="" disabled selected>Eliga el Mes</option>
                    <option value="1">Enero</option>
                    <option value="2">Febrero</option>
                    <option value="3">Marzo</option>
                    <option value="4">Abril</option>
                    <option value="5">Mayo</option>
                    <option value="6">Junio</option>
                    <option value="7">Julio</option>
                    <option value="8">Agosto</option>
                    <option value="9">Setiembre</option>
                    <option value="10">Octubre</option>
                    <option value="11">Noviembre</option>
                    <option value="12">Dicienbre</option>
                  </select>
                  <label>Eliga el Mes</label>
                </div>

              </div>
              <div class="row">
                <div class="input-field col s6">
                  <select>
                    <option value="" disabled selected>Eliga el Monto</option>
                    <option value="1">S/.25</option>
                    <option value="2">S/.30</option>
                    <option value="3">S/.35</option>
                    <option value="4">S/.40</option>
                    <option value="5">S/.45</option>
                    <option value="6">S/.50</option>
                    <option value="7">S/.55</option>
                    <option value="8">S/.60</option>
                    <option value="9">S/.65</option>
                    <option value="10">S/.70</option>
                    <option value="11">S/.75</option>
                    <option value="12">S/.80</option>
                    <option value="13">S/.85</option>
                  </select>
                  <label>Monto</label>
                </div>
                <div class="input-field col s6">
                  <i class="mdi-maps-pin-drop prefix"></i>
                  <input name="comentario" type="text" class="validate">
                  <label for="comentario">Comentario</label>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col s12 center">
                  <button class="btn cyan waves-effect waves-light" type="submit" name="action">Enviar
                    <i class="mdi-content-send right"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
