<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>SpeedTest</title>

    <!-- Favicons-->
    <link rel="icon" href="{{asset('resources/images/favicon/favicon-32x32.png')}}" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="{{asset('resources/images/favicon/apple-touch-icon-152x152.png')}}">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->
    <link href="{{asset('resources/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{asset('resources/css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection">


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="{{asset('resources/js/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{asset('resources/js/plugins/jvectormap/jquery-jvectormap.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{asset('resources/js/plugins/chartist-js/chartist.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="{{asset('resources/css/prism.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{asset('resources/js/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{asset('resources/js/plugins/data-tables/css/jquery.dataTables.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{asset('resources/js/plugins/chartist-js/chartist.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">

</head>

<body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="grey darken-3">
                <div class="nav-wrapper">
                    <h1 class="logo-wrapper"><a href="{{route('admin')}}" class="brand-logo darken-1"><img src="{{asset('resources/images/materialize-logo.png')}}" alt="materialize logo"></a> <span class="logo-text">Materialize</span></h1>
                    <ul class="right hide-on-med-and-down">
                        <li class="search-out">
                            <input type="text" class="search-out-text">
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-block waves-light show-search"><i class="mdi-action-search"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START LEFT SIDEBAR NAV-->
            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                    <li class="user-details cyan darken-2">
                        <div class="row">
                            <div class="col col s4 m4 l4">
                                <img src="{{asset('resources/images/avatar.jpg')}}" alt="" class="circle responsive-img valign profile-image">
                            </div>
                            <div class="col col s8 m8 l8">
                                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" >{{auth()->user()->nombre}}</a>
                                <p class="user-roal">Administrator</p>
                            </div>
                        </div>
                    </li>
                @include('admin.partials.nav')
                    <li class="li-hover"><div class="divider"></div></li>
                    <li class="li-hover"><p class="ultra-small margin more-text">MORE</p></li>
                    <li class="li-hover"><div class="divider"></div></li>
                    <li class="li-hover"><p class="ultra-small margin more-text">Daily es</p></li>
                    <li class="li-hover">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="sample-chart-wrapper">
                                    <div class="ct-chart ct-golden-section" id="ct2-chart"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a>
            </aside>
            <!-- END LEFT SIDEBAR NAV-->

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START CONTENT -->
            <!--breadcrumbs start-->
            <div id="breadcrumbs-wrapper" class=" grey lighten-3">
            @yield('header')
            </div>
            <!--breadcrumbs end-->

            <section id="content">

                <!--start container-->
                <div class="container">

                    <!--chart dashboard start-->
                    <div id="chart-dashboard">
             @yield('content')
           </div>

         </div>
       </section>
         </div>
       </div>
       <!-- //////////////////////////////////////////////////////////////////////////// -->

       <!-- START FOOTER -->
       <br>
       <br>
       <br>
       <br><br>
       <footer class="grey darken-3">
           <div class="container">
               <div class="row">
                   <div class="col l6 s12">
                       <h5 class="white-text">World Market</h5>
                       <p class="grey-text text-lighten-4">World map, world regions, countries and cities.</p>

                   </div>
                   <div class="col l4 offset-l2 s12">
                       <h5 class="white-text">Sales by Country</h5>
                       <p class="grey-text text-lighten-4">A sample polar chart to show sales by country.</p>
                       <div id="polar-chart-holder">
                       </div>
                   </div>
               </div>
           </div>
           <div class="footer-copyright">
               <div class="container grey-text text-lighten-4">
                   Copyright © 2018 <a class="grey-text text-lighten-4" href="#" target="_blank"></a> Todos los Derechos Reservados.
                   <span class="right grey-text text-lighten-4"> Desarrollado y diseñado por <a class="grey-text text-lighten-4" href="http://geekslabs.com/">Jose</a></span>
               </div>
           </div>
       </footer>
       <!-- END FOOTER -->


       <!-- ================================================
       Scripts
       ================================================ -->

       <!-- jQuery Library -->
       <script type="text/javascript" src="{{asset('resources/js/jquery-1.11.2.min.js')}}"></script>
       <!--materialize js-->
       <script type="text/javascript" src="{{asset('resources/js/materialize.min.js')}}"></script>
       <!--scrollbar-->
       <script type="text/javascript" src="{{asset('resources/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>


       <!-- chartist -->
       <script type="text/javascript" src="{{asset('resources/js/plugins/chartist-js/chartist.min.js')}}"></script>

       <!-- chartjs -->
       <script type="text/javascript" src="{{asset('resources/js/plugins/chartjs/chart.min.js')}}"></script>
       <script type="text/javascript" src="{{asset('resources/js/plugins/chartjs/chart-script.js')}}"></script>

       <!-- sparkline -->
       <script type="text/javascript" src="{{asset('resources/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
       <script type="text/javascript" src="{{asset('resources/js/plugins/sparkline/sparkline-script.js')}}"></script>

       <!--jvectormap-->
       <script type="text/javascript" src="{{asset('resources/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
       <script type="text/javascript" src="{{asset('resources/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
       <script type="text/javascript" src="{{asset('resources/js/plugins/jvectormap/vectormap-script.js')}}"></script>
       <!-- data-tables -->
       <script type="text/javascript" src="{{asset('resources/js/plugins/data-tables/js/jquery.dataTables.min.js')}}"></script>
       <script type="text/javascript" src="{{asset('resources/js/plugins/data-tables/data-tables-script.js')}}"></script>

       <!--plugins.js - Some Specific JS codes for Plugin Settings-->
       <script type="text/javascript" src="{{asset('resources/js/plugins.js')}}"></script>
   </body>

   </html>
