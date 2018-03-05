<ul class="main-menu">
    <li class="sub-header"><span>Layouts</span></li>
    <li ><a href="{{route('admin')}}">
            <div class="icon-w">
                <div class="os-icon os-icon-layout"></div>
            </div>
            <span>Inicio</span></a>
    </li>
    <li class=" has-sub-menu"><a href="#">
            <div class="icon-w">
                <div class="os-icon os-icon-user-plus"></div>
            </div>
            <span>Registrar</span></a>
        <div class="sub-menu-w">
            <div class="sub-menu-header">Register</div>
            <div class="sub-menu-icon"><i class="icon-feather-user"></i></div>
            <div class="sub-menu-i">
                <ul class="sub-menu">
                    <li><a href="{{route('admin.clientes.create')}}">Cliente</a></li>
                    <li><a href="{{route('admin.administrador.create')}}">Administrator</a></li>
                </ul>
            </div>
        </div>
    </li>
    <li class=" has-sub-menu"><a href="#">
            <div class="icon-w">
                <div class="os-icon os-icon-bell"></div>
            </div>
            <span>Notificaciones</span></a>
        <div class="sub-menu-w">
            <div class="sub-menu-header">Notificaciones</div>
            <div class="sub-menu-icon"><i class="os-icon os-icon-bell"></i></div>
            <div class="sub-menu-i">
                <ul class="sub-menu">
                    <li><a href="{{route('admin.notificaciones.password.index')}}">Contraseña wi-fi</a></li>
                    <li><a href="{{route('admin.notificaciones.reclamos.index')}}">Reclamos</a></li>
                </ul>
            </div>
        </div>
    </li>
    <li ><a href="{{route('admin.notificaciones.buzon.index')}}">
            <div class="icon-w">
                <div class="os-icon os-icon-mail"></div>
            </div>
            <span>Buzon de Entrada</span></a>
        <div class="sub-menu-w">
            <div class="sub-menu-header" >Buzon de Entrada</div>
        </div>
    </li>
    <li><a href="{{route('admin.perfil.index')}}">
            <div class="icon-w">
                <div class="os-icon os-icon-user"></div>
            </div>
            <span>Mi Perfil</span></a>
    </li>
    <li class="sub-header"><span>Pagos</span></li>
    <li class=" has-sub-menu"><a href="#">
            <div class="icon-w">
                <div class="os-icon os-icon-credit-card"></div>
            </div>
            <span>Pagos</span></a>
        <div class="sub-menu-w">
            <div class="sub-menu-header">Enviar Facturacion</div>
            <div class="sub-menu-icon"><i class="os-icon os-icon-package"></i></div>
            <div class="sub-menu-i">
                <ul class="sub-menu">
                    <li><a href="{{route('admin.pagos.index')}}">Enviar Facturacion</a></li>
                </ul>
            </div>
        </div>
    </li>
    <li class=" has-sub-menu"><a href="#">
            <div class="icon-w">
                <div class="os-icon os-icon-settings"></div>
            </div>
            <span>Config</span></a>
        <div class="sub-menu-w">
            <div class="sub-menu-header">Configuraciones</div>
            <div class="sub-menu-icon"><i class="os-icon os-icon-file-text"></i></div>
            <div class="sub-menu-i">
                <ul class="sub-menu">
                    <li><a href="{{route('admin.posts.index')}}">Config Web Page</a></li>
                </ul>
            </div>
        </div>
    </li>
    <li><a href="{{route('admin.notificaciones.portal.index')}}">
            <div class="icon-w">
                <div class="os-icon os-icon-pencil-1"></div>
            </div>
            <span>Cambiar Contraseña</span></a>
    </li>
    <li><a href="{{route('admin.clientes.index')}}">
            <div class="icon-w">
                <div class="os-icon os-icon-power"></div>
            </div>
            <span>Salir</span></a>
    </li>

</ul>