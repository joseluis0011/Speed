@extends('user.layout')
@section('header')
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
        <li class="breadcrumb-item"><a href="index-2.html">Products</a></li>
        <li class="breadcrumb-item"><span>Laptop with retina screen</span></li>
    </ul>
@stop
@section('content')
    <div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span></div>
    <div class="content-i">
        <div class="content-box">
            <div class="row">
                <div class="col-sm-5">
                    <div class="user-profile compact">
                        <div class="up-head-w" style="background-image:url({{asset('assets/img/profile_bg1.jpg')}})">
                            <div class="up-social"><a href="#"><i class="os-icon os-icon-twitter"></i></a><a
                                        href="#"><i class="os-icon os-icon-facebook"></i></a></div>
                            <div class="up-main-info"><h2 class="up-header">John Mayers</h2><h6
                                        class="up-sub-header">Product Designer at Facebook</h6></div>
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" class="decor" width="842px" height="219px"
                                 viewBox="0 0 842 219" preserveAspectRatio="xMaxYMax meet"
                                 version="1.1" xmlns="http://www.w3.org/2000/svg">
                                <g transform="translate(-381.000000, -362.000000)" fill="#FFFFFF">
                                    <path class="decor-path"
                                          d="M1223,362 L1223,581 L381,581 C868.912802,575.666667 1149.57947,502.666667 1223,362 Z"></path>
                                </g>
                            </svg>
                        </div>
                        <div class="up-controls">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="value-pair">
                                        <div class="label">Status:</div>
                                        <div class="value badge badge-pill badge-success">Online</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="up-contents">
                            <div class="m-b">
                                <div class="row m-b">
                                    <div class="col-sm-6 b-r b-b">
                                        <div class="el-tablo centered padded-v">
                                            <div class="value">25</div>
                                            <div class="label">Products Sold</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 b-b">
                                        <div class="el-tablo centered padded-v">
                                            <div class="value">315</div>
                                            <div class="label">Friends</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="element-wrapper">
                        <div class="element-box">
                            <form id="formValidate">
                                <div class="element-info">
                                    <div class="element-info-with-icon">
                                        <div class="element-info-icon">
                                            <div class="os-icon os-icon-wallet-loaded"></div>
                                        </div>
                                        <div class="element-info-text"><h5 class="element-inner-header">Mi Perfil
                                            </h5>
                                            <div class="element-inner-desc">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group"><label for=""> Direccion</label><input
                                            class="form-control" disabled
                                            placeholder="" >
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group"><label for=""> Telefono</label><input
                                                    class="form-control" placeholder="" disabled
                                                   >
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group"><label for="">Fecha de Inicio</label><input
                                                    class="form-control" disabled placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <fieldset class="form-group">
                                    <legend><span>Equipos Prestados</span></legend>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group"><label for=""> Tipo de Antena</label><input
                                                        class="form-control" disabled placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group"><label for="">Plan</label><input
                                                        class="form-control" disabled placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group"><label for=""> Estado</label><input
                                                        class="form-control" disabled placeholder="">
                                            </div>
                                        </div>
                                    </div> 
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!--------------------
START - Color Scheme Toggler
-------------------->
            <!--------------------
        END - Color Scheme Toggler
        --------------------><!--------------------
</div>
--------------------></div>
    </div>
@endsection