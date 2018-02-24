@extends('user.layout')
@section('header')
    <div class="os-tabs-w mx-4">
        <div class="os-tabs-controls">
            <ul class="nav nav-tabs upper">
                <li class="nav-item"><a aria-expanded="false" class="nav-link" data-toggle="tab"
                                        href="#tab_overview"> Active</a></li>
            </ul>
            <ul class="nav nav-pills smaller d-none d-lg-flex">
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#"> Today</a></li>
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#"> 7 Days</a>
                </li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#"> 14 Days</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#"> Last Month</a></li>
            </ul>
        </div>
    </div>
@stop
@section('content')
    <div class="col-lg-12">
        <div class="padded-lg"><!--START - Projects list-->
            <div class="projects-list">
                <div class="project-box">
                    <div class="project-head">
                        <div class="project-title"><h5>My Dashboard</h5></div>
                    </div>
                    <div class="project-info">
                        <div class="row align-items-center">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6"><a
                                                class="element-box el-tablo centered trend-in-corner padded bold-label"
                                                href="{{route('admin')}}">
                                            <div class="value">24</div>
                                            <div class="label">Total de Clientes Registrados</div>
                                        </a></div>
                                    <div class="col-sm-6"><a
                                                class="element-box el-tablo centered trend-in-corner padded bold-label"
                                                href="{{route('admin')}}">
                                            <div class="value">24</div>
                                            <div class="label">Total de Administradores Registrados</div>
                                        </a></div>
                                    <div class="col-sm-6"><a
                                                class="element-box el-tablo centered trend-in-corner padded bold-label"
                                                href="{{route('admin')}}">
                                            <div class="value">24</div>
                                            <div class="label">Total de Antenas Prestadas</div>
                                        </a></div>
                                    <div class="col-sm-6"><a
                                                class="element-box el-tablo centered trend-in-corner padded bold-label"
                                                href="{{route('admin')}}">
                                            <div class="value">24</div>
                                            <div class="label">Total de Dinero</div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--END - Projects list--></div>

    </div>
@endsection
