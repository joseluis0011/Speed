<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>{{config('app.name')}}</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/login.css" type="text/css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
</head>
<body>
  <div class="navbar-fixed">
  <nav  role="navigation" style="background: rgba(52, 73, 94,0.7);">
    <a id="logo-container" href="#" class="brand-logo" style="font-family: 'Great Vibes', cursive;">{{config('app.name')}}<i class="large material-icons" style="font-size: 50px;">network_check</i></a>
    <div class="nav-wrapper container" >
      <ul class="right hide-on-med-and-down" >
        <li> <a class="waves-effect waves-light" href="{{route('login')}}"><i class="material-icons">account_circle</i></a></li>
        @if(auth()->check())
        <li>{{auth()->user()->nombre}}</li>
          <li>

            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
              <i class="material-icons">exit_to_app</i>
            </a>
          </li>
        @endif
        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="login">Ingresar</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
</div>
  <div class="slider" style="margin-top: -63px;">
    <ul class="slides" >
      <li>
        <img src="https://hdwallpaperim.com/wp-content/uploads/2017/08/25/126849-network-computer-switch-wire-data_center-748x421.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h2>Welcome Speed-Networck</h2>
          <h3 class="light grey-text text-lighten-3">Y al menorp recio.</h3>
        </div>
      </li>

       <li>
        <img src="https://wallpaperscraft.com/image/squares_shape_light_85528_1920x1080.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h2>Navega en altas velocidades </h2>
          <h3 class="light grey-text text-lighten-3">Y al menorp recio.</h3>
        </div>
      </li>

      <li>
        <img src="https://prd-www-cdn.ubnt.com/media/images/homepage-hero/GPON-Technology-Platform-bg.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h2>Welcome Speed-Networck </h2>
          <h3 class="light grey-text text-lighten-3">Here's our small slogan.</h3>
        </div>
      </li>

      <li>
        <img src="img/antenas1.jpg" > <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      {!! $body[0]->body !!}
    </div>
  </div>

<div class="container">
  <div class="row">
    <div class="col s12 center">
      <h3><i class="mdi-content-send brown-text"></i></h3>
      <h4>Planes y Precios</h4>
  </div>
  </div>
  <div class="row">
    <div class="col s4 m4">
  <div class="card">
     <div class="card-image waves-effect waves-block waves-light">
       <img class="activator" src="img/M5.jpg">
     </div>
     <div class="card-content">
       <span class="card-title activator grey-text text-darken-4">Plan 35<i class="material-icons right">more_vert</i></span>

     </div>
     <div class="card-reveal">
       <span class="card-title grey-text text-darken-4">Plan S/.35<i class="material-icons right">close</i></span>
       <p>Al Contratar este Plan usted tendra 1Mbs de Velocidad adicionalmente 1 Antena y un Router Wi-Fi en modo Prestamo.
       Recuerde al termino de su contrato los equipos Brindados seran debueltos
     si usted desea este Plan porfavor llene el formulario de abajo o llamenos a los telefonos de la descripcion</p>
     </div>
   </div>
 </div>
 <div class="col s4 m4">
<div class="card">
  <div class="card-image waves-effect waves-block waves-light">
    <img class="activator" src="img/M5.jpg">
  </div>
  <div class="card-content">
    <span class="card-title activator grey-text text-darken-4">Plan 40<i class="material-icons right">more_vert</i></span>
    <p><a href="#">This is a link</a></p>
  </div>
  <div class="card-reveal">
    <span class="card-title grey-text text-darken-4">Plan S/.40<i class="material-icons right">close</i></span>
    <p>Al Contratar este Plan usted tendra 2Mbs de Velocidad adicionalmente 1 Antena y un Router Wi-Fi en modo Prestamo.
    Recuerde al termino de su contrato los equipos Brindados seran debueltos
  si usted desea este Plan porfavor llene el formulario de abajo o llamenos a los telefonos de la descripcion</p>
  </div>
</div>
</div>
<div class="col s4 m4">
<div class="card">
 <div class="card-image waves-effect waves-block waves-light">
   <img class="activator" src="img/M5.jpg">
 </div>
 <div class="card-content">
   <span class="card-title activator grey-text text-darken-4">Plan 50<i class="material-icons right">more_vert</i></span>
   <p><a href="#">This is a link</a></p>
 </div>
 <div class="card-reveal">
   <span class="card-title grey-text text-darken-4">Plan S/.50<i class="material-icons right">close</i></span>
   <p>Al Contratar este Plan usted tendra 3Mbs de Velocidad adicionalmente 1 Antena y un Router Wi-Fi en modo Prestamo.
   Recuerde al termino de su contrato los equipos Brindados seran debueltos
 si usted desea este Plan porfavor llene el formulario de abajo o llamenos a los telefonos de la descripcion</p>
 </div>
</div>
</div>
 </div>
 <div class="row">
   <div class="col s4 m4">
 <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="img/M5.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Plan 60<i class="material-icons right">more_vert</i></span>
      <p><a href="#">This is a link</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Plan S/.60<i class="material-icons right">close</i></span>
      <p>Al Contratar este Plan usted tendra 4Mbs de Velocidad adicionalmente 1 Antena y un Router Wi-Fi en modo Prestamo.
      Recuerde al termino de su contrato los equipos Brindados seran debueltos
    si usted desea este Plan porfavor llene el formulario de abajo o llamenos a los telefonos de la descripcion</p>
    </div>
  </div>
</div>
<div class="col s4 m4">
<div class="card">
 <div class="card-image waves-effect waves-block waves-light">
   <img class="activator" src="img/M5.jpg">
 </div>
 <div class="card-content">
   <span class="card-title activator grey-text text-darken-4">Plan 70<i class="material-icons right">more_vert</i></span>
   <p><a href="#">This is a link</a></p>
 </div>
 <div class="card-reveal">
   <span class="card-title grey-text text-darken-4">Plan S/.70<i class="material-icons right">close</i></span>
   <p>Al Contratar este Plan usted tendra 5Mbs de Velocidad adicionalmente 1 Antena y un Router Wi-Fi en modo Prestamo.
   Recuerde al termino de su contrato los equipos Brindados seran debueltos
 si usted desea este Plan porfavor llene el formulario de abajo o llamenos a los telefonos de la descripcion</p>
 </div>
</div>
</div>
<div class="col s4 m4">
<div class="card">
<div class="card-image waves-effect waves-block waves-light">
  <img class="activator" src="img/M5.jpg">
</div>
<div class="card-content">
  <span class="card-title activator grey-text text-darken-4">Plan 80<i class="material-icons right">more_vert</i></span>
  <p><a href="#">This is a link</a></p>
</div>
<div class="card-reveal">
  <span class="card-title grey-text text-darken-4">Plan S/.80<i class="material-icons right">close</i></span>
  <p>Al Contratar este Plan usted tendra 5Mbs de Velocidad adicionalmente 1 Antena y un Router Wi-Fi en modo Prestamo.
  Recuerde al termino de su contrato los equipos Brindados seran debueltos
si usted desea este Plan porfavor llene el formulario de abajo o llamenos a los telefonos de la descripcion</p>
</div>
</div>
</div>
</div>
</div>


  <div class="container">
    <div class="row">
      <div class="col s12 center">
      {!! $body[1]->body !!}
      </div>
    </div>
  </div>

<div class="container">
  <div class="section">
    <form method="POST" class="col s12"  action="{{route('newCliente')}}">
      {{ csrf_field() }}
        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">account_circle</i>
            <input name="name" id="icon_prefix" type="text" class="validate">
            <label for="icon_prefix">Nombre</label>
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">supervisor_account</i>
            <input name="apellido" id="icon_telephone" type="text" class="validate">
            <label for="icon_telephone">Apellido</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">phone</i>
            <input name="phone" id="icon_prefix" type="text" class="validate">
            <label for="icon_prefix">Telefono 0 Celular</label>
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">contacts</i>
            <input name="direccion" id="icon_telephone" type="text" class="validate">
            <label for="icon_telephone">Direccion</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <select name="tplan">
              <option value="" disabled selected>Eliga el Plan</option>
              <option value="1">Plan 35</option>
              <option value="2">Plan 40</option>
              <option value="3">Plan 50</option>
              <option value="4">Plan 60</option>
              <option value="5">Plan 70</option>
              <option value="6">Plan 80</option>
            </select>
            <label>Eliga el Plan a Contratar</label>
          </div>
          <div class="input-field col s6">
            <textarea name="coment" id="textarea1" class="materialize-textarea" data-length="120"></textarea>
            <label for="textarea1">Comentario</label>
          </div>
        </div>
      <button type="submit" class="btn">Enviar</button>
      </form>
    </div>
  </div>




  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      © 2018-2020 SpeedTest, All rights reserved.
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
<script>
  $(document).ready(function(){
     $('.slider').slider({
       height: 650
     });
      $('.modal').modal();
       $('select').material_select();
   });
</script>
  </body>
</html>
