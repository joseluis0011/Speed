@extends('user.layout')
@section('header')
  <!--breadcrumbs start-->
  <div id="breadcrumbs-wrapper" class=" grey lighten-3">
    <div class="container">
      <div class="row">
        <div class="col s12 m12 l12">
          <h5 class="breadcrumbs-title">Datos Generales</h5>
          <ol class="breadcrumb">
            <li class="active">Inicio</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!--breadcrumbs end-->
@stop
@section('content')
  <h4 class="header">Bienvenido .......</h4>
<!--card stats start-->
<div id="card-stats">
    <div class="row">
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-content  green white-text">
                    <p class="card-stats-title"><i class="mdi-social-group-add"></i> Total de Clientes</p>
                    <h4 class="card-stats-number">566</h4>
                    <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 15% <span class="green-text text-lighten-5">from yesterday</span>
                    </p>
                </div>
                <div class="card-action  green darken-2">
                    <div id="clients-bar"></div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-content purple white-text">
                    <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Total Sales</p>
                    <h4 class="card-stats-number">$8990.63</h4>
                    <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 70% <span class="purple-text text-lighten-5">last month</span>
                    </p>
                </div>
                <div class="card-action purple darken-2">
                    <div id="sales-compositebar"></div>

                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-content blue-grey white-text">
                    <p class="card-stats-title"><i class="mdi-action-trending-up"></i> Today Profit</p>
                    <h4 class="card-stats-number">$806.52</h4>
                    <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 80% <span class="blue-grey-text text-lighten-5">from yesterday</span>
                    </p>
                </div>
                <div class="card-action blue-grey darken-2">
                    <div id="profit-tristate"></div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-content deep-purple white-text">
                    <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> New Invoice</p>
                    <h4 class="card-stats-number">1806</h4>
                    <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-down"></i> 3% <span class="deep-purple-text text-lighten-5">from last month</span>
                    </p>
                </div>
                <div class="card-action  deep-purple darken-2">
                    <div id="invoice-line"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--card stats end-->
@endsection
