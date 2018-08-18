<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
        <li> <a class="#00bcd4 cyan btn " href="{{route('login')}}"><i class="material-icons right">account_circle</i>Ingresar</a></li>

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
          <h2>Welcome Speed-Network</h2>
          <h3 class="light grey-text text-lighten-3">Y al menor Precio.</h3>
        </div>
      </li>

       <li>
        <img src="https://wallpaperscraft.com/image/squares_shape_light_85528_1920x1080.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h2>Navega en altas velocidades </h2>
          <h3 class="light grey-text text-lighten-3">Y al menor Precio.</h3>
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
          <h3>Mejor Conectividad</h3>
          <h5 class="light grey-text text-lighten-3">Calidad de Servicio.</h5>
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
       <p><a >Instalacion S/.80</a></p>
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
    <p><a >Instalacion S/.80</a></p>
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
   <p><a >Instalacion S/.100</a></p>
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
      <p><a >Instalacion S/.100</a></p>
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
   <p><a >Instalacion S/.100</a></p>
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
  <p><a >Instalacion S/.80</a></p>
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
              <option value="35">Plan 35</option>
              <option value="40">Plan 40</option>
              <option value="50">Plan 50</option>
              <option value="60">Plan 60</option>
              <option value="70">Plan 70</option>
              <option value="80">Plan 80</option>
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

      <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Zonas de Cobertura<i class="small material-icons">map</i></h4>
      </div>
      <div class="container">
          <div class="row">
              <div class="col l6 s12 center">
                  <h5 class="white-text">xxxxxx <i class="small material-icons">looks_one</i></h5>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d499488.88286924723!2d-77.26798390823734!3d-12.0258269654704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c5f619ee3ec7%3A0x14206cb9cc452e4a!2sLima!5e0!3m2!1ses-419!2spe!4v1534437301295" width="300" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                   <br>
                  <i class="small material-icons">location_on</i> Ate-Vitarte
                  <br>
                  <i class="small material-icons">network_check</i>  xxxxxx
                  <br>
                  <i class="small material-icons">network_check</i>  xxxxxxxx
                  <br>
                  <i class="small material-icons">network_check</i>  xxxxxxx
                  <br>
                  <i class="small material-icons">network_check</i>  xxxxxxxx
                  <br>
                  <i class="small material-icons">perm_phone_msg</i>   Telefonos:
                  xxxxxxxxxx --
                  xxxxxxxxx
              </div>
              <div class="col l6 s12 center">
                  <h5 class="white-text">xxxx <i class="small material-icons">looks_two</i></h5>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.2247173321434!2d-76.91525278575479!3d-12.028044744826024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c3f9420a4357%3A0xf1b2ecf2fa643286!2sSan+Antonio+Maria+Claret%2C+Cercado+de+Lima!5e0!3m2!1ses-419!2spe!4v1534620560173" width="300" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                <br>
                  <i class="small material-icons">location_on</i>Ate-Vitarte
                  <br>
                  <i class="small material-icons">network_check</i>   xxxxx
                  <br>
                  <i class="small material-icons">network_check</i>   xxxxxxx
                  <br>
                  <i class="small material-icons">network_check</i>   xxxxxx
                  <br>
                  <i class="small material-icons">network_check</i>   xxxxxx
                  <br>
                  <i class="small material-icons">network_check</i>   xxxxxx
                  <br>
                  <i class="small material-icons">perm_phone_msg</i>  Telefonos:
                  xxxxxxxxx
              </div>


          </div>
      </div>
      <div class="footer-copyright">
          <div class="container">
              © 2018-2020 Speed Wireless Peru, All rights reserved.
          </div>
      </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="js/materialize.js" type="text/javascript"></script>
  <script src="js/init.js" type="text/javascript"></script>
  <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
<script>
  $(document).ready(function(){
     $('.slider').slider({
       height: 650
     });
    $('select').material_select();
    $('.button-collapse').sideNav();
   });
</script>
  </body>
</html>
