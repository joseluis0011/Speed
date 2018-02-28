<ul class="main-menu">
    <li class="sub-header"><span>Layouts</span></li>
    <li ><a href="">
            <div class="icon-w">
                <div class="os-icon os-icon-layout"></div>
            </div>
            <span>Inicio</span></a>
    </li>
    <li><a href="{{route('user.perfil.index')}}">
            <div class="icon-w">
                <div class="os-icon os-icon-user"></div>
            </div>
            <span>Mi Perfil</span></a>
    </li>
    <li ><a href="{{route('user.pagos.index')}}">
            <div class="icon-w">
                <div class="os-icon os-icon-mail"></div>
            </div>
            <span>Facturacion</span></a>
        <div class="sub-menu-w">
            <div class="sub-menu-header" >Facturacion</div>
        </div>
    </li>
    <li class=" has-sub-menu"><a href="#">
            <div class="icon-w">
                <div class="os-icon os-icon-bell"></div>
            </div>
            <span>Solicituds</span></a>
        <div class="sub-menu-w">
            <div class="sub-menu-header">Solicituds</div>
            <div class="sub-menu-icon"><i class="os-icon os-icon-bell"></i></div>
            <div class="sub-menu-i">
                <ul class="sub-menu">
                    <li><a href="{{route('user.password.index')}}">Cambiar Contraseña wi-fi</a></li>
                </ul>
            </div>
        </div>
    </li>
    <li ><a href="{{route('user.reclamos.index')}}">
            <div class="icon-w">
                <div class="os-icon os-icon-mail"></div>
            </div>
            <span>Reclamos</span></a>
        <div class="sub-menu-w">
            <div class="sub-menu-header" >Reclamos</div>
        </div>
    </li>

    <li><a href="{{route('user.portal.index')}}">
            <div class="icon-w">
                <div class="os-icon os-icon-pencil-1"></div>
            </div>
            <span>Cambiar Contraseña</span></a>
    </li>
    <li><a href="#">
            <div class="icon-w">
                <div class="os-icon os-icon-power"></div>
            </div>
            <span>Salir</span></a>
    </li>

</ul>