<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Login Page </title>

  <!-- Favicons-->
  <link rel="icon" href="resources/images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="resources/images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="resources/images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->

  <link href="resources/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="resources/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="resources/css/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="resources/css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="resources/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">

</head>

<body class="cyan">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div  class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
        <div class="row">
          <div class="input-field col s12 center">
            <img src="resources/images/login-logo.png" alt="" class="circle responsive-img valign profile-image-login">
            <p class="center login-form-text">Bienvenido ingrese sus Datos</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12{{ $errors->has('dni') ? ' has-error' : '' }}">
            <i class="mdi-social-person-outline prefix"></i>
            <input  type="text" class="validate" name="dni" value="{{ old('dni') }}" required autofocus>
            @if ($errors->has('dni'))
                <span class="help-block">
                    <strong>{{ $errors->first('dni') }}</strong>
                </span>
            @endif
            <label for="dni" class="center-align">DNI</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12{{ $errors->has('password') ? ' has-error' : '' }}">
            <i class="mdi-action-lock-outline prefix"></i>
            <input  type="password" class="validate" name="password" required>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button type="submit" class="btn waves-effect waves-light col s12">Entrar</button>
          </div>
        </div>

      </form>
    </div>
  </div>



  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="resources/js/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="resources/js/jquery.backstretch.min.js"></script>
  <script>
    $(document).ready(function(e){
      $.backstretch([
        "img/img1.jpg",
        "img/img2.jpg",
        "img/img3.jpg",
        "img/img4.jpg",
      ],{
        fade:750,
        duration:8000
      });
    });
  </script>
  <!--materialize js-->
  <script type="text/javascript" src="resources/js/materialize.js"></script>
  <!--prism-->
  <script type="text/javascript" src="resources/js/prism.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="resources/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

  <!--plugins.js - Some Specific JS codes for Plugin Settings-->
  <script type="text/javascript" src="resources/js/plugins.js"></script>

</body>

</html>
