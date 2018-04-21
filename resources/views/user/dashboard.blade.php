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
                                                href="">
                                            <div class="value">24</div>
                                            <div class="label">Mi Plan</div>
                                        </a></div>
                                    <div class="col-sm-6"><a
                                                class="element-box el-tablo centered trend-in-corner padded bold-label"
                                                href="">
                                            <div class="value">24</div>
                                            <div class="label">Fecha de Pago</div>
                                        </a></div>
                                    <div class="col-sm-6"><a
                                                class="element-box el-tablo centered trend-in-corner padded bold-label"
                                                href="">
                                            <div class="value">24</div>
                                            <div class="label">Mi usuario</div>
                                        </a></div>
                                    <div class="col-sm-6"><a
                                                class="element-box el-tablo centered trend-in-corner padded bold-label"
                                                href="">
                                            <div class="value">24</div>
                                            <div class="label">Mi direccion</div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--END - Projects list--></div>


    </div>
    <div class="col-lg-12">
        <div class="padded-lg"><!--START - Projects list-->
            <div class="projects-list">
                <div class="project-box">
                    <div class="project-head">
                        <div class="project-title"><h5>¿Donde Puedo pagar mi Servicio?</h5></div>
                    </div>
                    <div class="project-info">
                        <div class="row align-items-center">
                            <div class="col-sm-12">
                                <p>Usted Puede Pagar su Servicio en:</p>
                                <i class="os-icon os-icon-check"></i> <span>Nuestras Oficinas</span><br>
                                <i class="os-icon os-icon-check"></i> <span>Agentes BCP</span><br>
                                <i class="os-icon os-icon-check"></i> <span>Agentes Interbank</span><br>
                                <i class="os-icon os-icon-check"></i> <span>Via pago web de BCP</span><br>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-sm-6">
                                       <a href="http://www.encuentrabcp.com/buscador/" target="_blank"><img src="img/bcp.png" ></a>
                                        <p>Recuerde: Cuando haya realizado el deposito enviar la foto del baucher al numero via WhatsApp y su DNI</p>
                                        <i class="os-icon os-icon-check"></i> <span>Para los Clientes de Santa Maria 981766260</span><br>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="http://www.interbankagente.pe/Ubicanos" target="_blank"><img src="img/interbank.png" ></a>
                                        <p>Recuerde: Cuando haya realizado el deposito enviar una foto del baucher al numero 999999999 via WhatsApp y su DNI</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--END - Projects list--></div>


    </div>
@endsection
