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
</head>
<body>
  <div class="navbar-fixed">
  <nav class="#c5e1a5 light-green lighten-3" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">{{config('app.name')}}</a>
      <ul class="right hide-on-med-and-down">
        <li> <a class="waves-effect waves-light btn modal-trigger" href="{{route('login')}}">Ingresar</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Ingresar</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
</div>
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="img/antenas1.jpg" style="wich"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="img/antenas.jpg" > <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="img/antenas4.png"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="img/antenas2.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Quienes Somos</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Servicios</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Atencion</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

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
  <div class="section">
   @foreach($posts as $post)
    <div class="row">
      <div class="col s12 center">
        <h3><i class="mdi-content-send brown-text"></i></h3>
        <h4> {{$post->title}} </h4>
        <p class="left-align light"> {{$post->body}} </p>
      </div>
    </div>
  @endforeach
      <form class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">account_circle</i>
            <input id="icon_prefix" type="text" class="validate">
            <label for="icon_prefix">Nombre</label>
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">supervisor_account</i>
            <input id="icon_telephone" type="text" class="validate">
            <label for="icon_telephone">Apellido</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">phone</i>
            <input id="icon_prefix" type="text" class="validate">
            <label for="icon_prefix">Telefono 0 Celular</label>
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">contacts</i>
            <input id="icon_telephone" type="text" class="validate">
            <label for="icon_telephone">Direccion</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <select>
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
            <textarea id="textarea1" class="materialize-textarea" data-length="120"></textarea>
            <label for="textarea1">Comentario</label>
          </div>
        </div>
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
     $('.slider').slider();
      $('.modal').modal();
       $('select').material_select();
   });
</script>
  </body>
</html>
