@extends('admin.layout')
@section('header')
  <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
    <li class="breadcrumb-item"><a href="index-2.html">Products</a></li>
    <li class="breadcrumb-item"><span>Laptop with retina screen</span></li>
  </ul>
@stop
@section('content')
  <div class="content-i">
    <div class="content-box">
      <div class="row">
        <div class="col-lg-12">
          <div class="element-wrapper"><h6 class="element-header">Cambio de Contraseña de su Portal</h6>
            <div class="element-box">
              <form><h5 class="form-header">Default Layout</h5>
                <div class="form-desc">Discharge best employed your phase each the of shine. Be
                  met even reason consider logbook redesigns. Never a turned interfaces among
                  asking
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group"><label for=""> Usuario</label><input
                              class="form-control" placeholder="este campo tiene que estar desabilitado" type="text" value="">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group"><label for="">DNI</label><input
                              class="form-control" placeholder="este campo tiene que estar desabilitado" type="password">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group"><label for=""> Nueva Contraseña</label><input
                              class="form-control" placeholder="Password" type="password">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group"><label for="">Repita la Nueva Contraseña</label><input
                              class="form-control" placeholder="Password" type="password">
                    </div>
                  </div>
                </div>
                <div class="form-buttons-w">
                  <button class="btn btn-primary" type="submit"> Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>

      </div>
  </div>
@endsection
