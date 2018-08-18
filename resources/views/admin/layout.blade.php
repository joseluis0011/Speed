<!DOCTYPE html>
<html>
<head>
    <title>{{config('app.name')}}</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="{{asset('assets/bower_components/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <link href="{{asset('assets/bower_components/dropzone/dist/dropzone.css')}}" rel="stylesheet">
    <link href="{{asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/bower_components/fullcalendar/dist/fullcalendar.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/bower_components/slick-carousel/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/main4a76.css?version=4.3.0')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.2.0/css/iziToast.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body id="conf_fullscream" class="menu-position-side menu-side-left full-screen">
<div class="all-wrapper solid-bg-all">
    <div class="layout-w">
<!--------------------
START - Mobile Menu
-------------------->
        <div class="menu-mobile menu-activated-on-click color-scheme-dark">
            <div class="mm-logo-buttons-w"><a class="mm-logo" href="/">
                    <img src="/assets/img/logo.png"><span>{{config('app.name')}}</span></a>
                <div class="mm-buttons">
                    <div class="content-panel-open">
                        <div class="os-icon os-icon-grid-circles"></div>
                    </div>
                    <div class="mobile-menu-trigger">
                        <div class="os-icon os-icon-hamburger-menu-1"></div>
                    </div>
                </div>
            </div>
            <div class="menu-and-user">
                <div class="logged-user-w">
                    <div class="avatar-w"><img alt="" src="/assets/img/avatar1.jpg"></div>
                    <div class="logged-user-info-w">

                        <div class="logged-user-name"></div>
                        <div class="logged-user-role">Administrator</div>
                    </div>
                </div>
<!--------------------
START - Mobile Menu List
-------------------->

            @include('admin.partials.menu-phone')
<!--------------------
END - Mobile Menu List
-------------------->

            </div>
        </div>
<!--------------------
END - Mobile Menu
-------------------->
<!--------------------
START - Main Menu
-------------------->
        <div id="config_menu" class="{{auth()->user()->Config[0]->value}}">
            <div class="logo-w">
                <a class="logo" href="/admin">
                    <div class="logo-element"></div>
                    <div class="logo-label">SpeedTest</div>
                </a></div>
            <div class="logged-user-w avatar-inline">
                <div class="logged-user-i">
                    <div class="avatar-w"><img alt="" src="/assets/img/avatar1.jpg"></div>
                    <div class="logged-user-info-w">
                        <div class="logged-user-name">{{auth()->user()->nombre}} {{auth()->user()->apellido}}</div>
                        <div class="logged-user-role">Administrator</div>
                    </div>
                    <div class="logged-user-toggler-arrow">
                        <div class="os-icon os-icon-chevron-down"></div>
                    </div>
                    <div class="logged-user-menu color-style-bright">
                        <div class="logged-user-avatar-info">
                            <div class="avatar-w"><img alt="" src="/assets/img/avatar1.jpg"></div>
                            <div class="logged-user-info-w">
                                <div class="logged-user-name">{{auth()->user()->nombre}} {{auth()->user()->apellido}}</div>
                                <div class="logged-user-role">Administrator</div>
                            </div>
                        </div>
                        <div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>
                        <ul>
                            <li><a href="{{route('admin.perfil.index')}}"><i class="os-icon os-icon-user-male-circle2"></i><span>Perfil</span></a>
                            </li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                    <i class="os-icon os-icon-signs-11"></i><span>Salir</span></a>
                                </a>
                            </li>

                            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
            <h1 class="menu-page-header">Page Header</h1>
            @include('admin.partials.menu')

        </div>
<!--------------------
END - Main Menu
-------------------->
        <div class="content-w">
<!--------------------
START - Top Bar
-------------------->
            <div id="conf_topbar" class="top-bar color-scheme-light">

                <div class="top-menu-controls">

 <!--------------------
START - Messages Link in secondary top menu
-------------------->
                    <div class="messages-notifications os-dropdown-trigger os-dropdown-position-left"><i
                                class="os-icon os-icon-mail-14"></i>
                        <div class="new-messages-count"><span id="view_count_notify" class="new badge red"></span></div>
                        <div class="os-dropdown light message-list">
                            <ul class="list-new-message">
                                <li {{request()->is('admin/notificaciones/password')?'class=active':''}}>
                                    <a href="{{route('admin.notificaciones.password.index')}}">
                                        C. contraseña Wi-fi
                                        <span style="display: none" id="typenoty_1" class="new badge blue">4</span> </a>
                                </li>
                                <li {{request()->is('admin/notificaciones/reclamos')?'class=active':''}}>
                                    <a href="{{route('admin.notificaciones.reclamos.index')}}">
                                        Reclamos
                                        <span style="display: none" id="typenoty_2" class="new badge blue">4</span> </a>
                                </li>
                                <li {{request()->is('admin/notificaciones/buzon')?'class=active':''}}>
                                    <a href="{{route('admin.notificaciones.buzon.index')}}">
                                        buzon de entrada
                                        <span style="display: none" id="typenoty_3" class="new badge blue">4</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
<!--------------------
END - Messages Link in secondary top menu
--------------------><!--------------------
START - Settings Link in secondary top menu
-------------------->
           <!--         <div class="top-icon top-settings os-dropdown-trigger os-dropdown-position-left">
                        <i class="os-icon os-icon-ui-46"></i>
                        <div class="os-dropdown">
                            <div class="icon-w"><a href="{{route('admin.posts.index')}}"></a><i class="os-icon os-icon-ui-46"></i></div>
                            <ul>
                                <li><a href="{{route('admin.perfil.index')}}"><i class="os-icon os-icon-ui-49"></i><span>Profile Settings</span></a>
                                </li>
                                <li><a href="/"><i class="os-icon os-icon-grid-10"></i><span>Billing Info</span></a>
                                </li>
                                <li><a href="/"><i class="os-icon os-icon-ui-44"></i><span>My Invoices</span></a>
                                </li>
                                <li><a href="/"><i class="os-icon os-icon-ui-15"></i><span>Cancel Account</span></a>
                                </li>
                            </ul>
                        </div>
                    </div><!--------------------
END - Settings Link in secondary top menu
-------------------->
                </div>
<!--------------------
END - Top Menu Controls
-------------------->
            </div>
<!--------------------
END - Top Bar
-------------------->
            <div class="content-i" style="margin-bottom:5%;">
                <div class="content-box"><!--START - Control panel above projects-->
                    <!--END - Control panel above projects-->
                    @yield('header')

                        @yield('content')

                </div>
            </div>
        </div>
    </div>
    <div class="display-type"></div>
</div>
<script src="{{asset('assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
@yield('script_top')
<script>
    var name='',url= "",display='',html='',idn='';
    $(document).ready(function () {
        var nnt = 0,nnt2 = 0,nntg = 0;

        $.get('{{route('getBuzon')}}',function (data) {
            nntg =  data.length;
            if(data.length>0){
                $.each(data ,function (i,d) {
                    display = d.reclamo;
                    name = d.nombre;
                    idn = d.idnotificaciones;
                    html = '<li><a  onclick="view('+idn+',\'buzon\')"><div class="user-avatar-w">'+
                            '<img alt="" src="/assets/img/avatar1.jpg"></div>'+
                            '<div class="message-content">'+
                            '<h6 class="message-from">'+name+'</h6>'+
                            '<h6 class="message-title">'+display+'</h6>'+
                            '</div></a></li>';
                    $('.list-new-message').append(html)
                });
            }

        });
        $.get('{{route('getnewnotify')}}',function (data) {
            nntg = nntg + data.length;
            if(data != null && nntg >0){
                $('.new-messages').text(nntg);
                $.each(data,function (i,d) {
                    name =d.persona.user.nombre+' '+d.persona.user.apellido;
                    url = (d.typenpti == "1")?'password':'reclamos';
                    display = d.reclamo;
                    idn = d.idnotificaciones;
                    if(d.typenoti === "1"){
                        nnt = nnt +1;
                        html = '<li><a  onclick="view('+idn+',\''+url+'\')" ><div class="user-avatar-w">'+
                                '<img alt="" src="/assets/img/avatar1.jpg"></div>'+
                                '<div class="message-content">'+
                                '<h6 class="message-from">'+name+'</h6>'+
                                '<h6 class="message-title">'+display+'</h6>'+
                                '</div></a></li>';
                        $('.list-new-message').append(html)
                    }else if(d.typenoti === "2"){
                        nnt2 = nnt2 +1;
                        html = '<li><a  onclick="view('+idn+',\''+url+'\')" ><div class="user-avatar-w">'+
                                '<img alt="" src="/assets/img/avatar1.jpg"></div>'+
                                '<div class="message-content">'+
                                '<h6 class="message-from">'+name+'</h6>'+
                                '<h6 class="message-title">'+display+'</h6>'+
                                '</div></a></li>';
                        $('.list-new-message').append(html)
                    }
                })

            }
        });
    });

    function view(id,url) {
        $.get('{{route('updateview')}}?idusuario='+id,function (data) {
            var urls = '{{url('/')}}';
            window.location.href = urls+'/admin/notificaciones/'+url;
        });
    }
</script>
<script src="{{asset('assets/bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('assets/bower_components/moment/moment.js')}}"></script>
<script src="{{asset('assets/bower_components/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{asset('assets/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('assets/bower_components/jquery-bar-rating/dist/jquery.barrating.min.js')}}"></script>
<script src="{{asset('assets/bower_components/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('assets/bower_components/bootstrap-validator/dist/validator.min.js')}}"></script>
<script src="{{asset('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('assets/bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js')}}"></script>
<script src="{{asset('assets/bower_components/dropzone/dist/dropzone.js')}}"></script>
<script src="{{asset('assets/bower_components/editable-table/mindmup-editabletable.js')}}"></script>
<script src="{{asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('assets/bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>
<script src="{{asset('assets/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('assets/bower_components/tether/dist/js/tether.min.js')}}"></script>
<script src="{{asset('assets/bower_components/slick-carousel/slick/slick.min.js')}}"></script>
<script src="{{asset('assets/bower_components/bootstrap/js/dist/util.js')}}"></script>
<script src="{{asset('assets/bower_components/bootstrap/js/dist/alert.js')}}"></script>
<script src="{{asset('assets/bower_components/bootstrap/js/dist/button.js')}}"></script>
<script src="{{asset('assets/bower_components/bootstrap/js/dist/carousel.js')}}"></script>
<script src="{{asset('assets/bower_components/bootstrap/js/dist/collapse.js')}}"></script>
<script src="{{asset('assets/bower_components/bootstrap/js/dist/dropdown.js')}}"></script>
<script src="{{asset('assets/bower_components/bootstrap/js/dist/modal.js')}}"></script>
<script src="{{asset('assets/bower_components/bootstrap/js/dist/tab.js')}}"></script>
<script src="{{asset('assets/bower_components/bootstrap/js/dist/tooltip.js')}}"></script>
<script src="{{asset('assets/bower_components/bootstrap/js/dist/popover.js')}}"></script>
<script src="{{asset('assets/js/demo_customizer4a76.js?version=4.3.0')}}"></script>
<script src="{{asset('assets/js/main4a76.js?version=4.3.0')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.2.0/js/iziToast.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
@yield('script_botton')
@include('admin.partials.message')

</body>