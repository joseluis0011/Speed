@extends('user.layout')
@section('header')
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Inicio</a></li>
        <li class="breadcrumb-item"><span>Cambio de Contraseña de su Portal</span></li>
    </ul>
@stop
@section('content')
    <div class="content-i">
        <div class="content-box">
            <div class="row">
                <div class="col-lg-12">
                    <div class="element-wrapper"><h6 class="element-header">Cambio de Contraseña de su Portal</h6>
                        <div class="element-box">
                            <form method="POST" class="col s12"  action="{{route('changePassword')}}">
                                {{ csrf_field() }}
                                <h5 class="form-header">Default Layout</h5>
                                <div class="form-desc">Discharge best employed your phase each the of shine. Be
                                    met even reason consider logbook redesigns. Never a turned interfaces among
                                    asking
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group"><label for="">Contraseña Actual</label><input
                                                    class="form-control" placeholder="Password" type="password" name="password">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group"><label for="">Nueva Contraseña</label><input name="new_password"
                                                                                                             class="form-control" placeholder="Password" type="password">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 center">
                                        <div class="form-buttons-w">
                                            <button class="btn btn-primary" type="submit"> Cambiar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection