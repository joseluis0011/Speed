<ul class="main-menu">
    <li class="sub-header"><span>Layouts</span></li>
    <li class="selected has-sub-menu"><a href="#">
            <div class="icon-w">
                <div class="os-icon os-icon-layout"></div>
            </div>
            <span>Inicio</span></a>
        <div class="sub-menu-w">
            <div class="sub-menu-header">Inicio</div>
            <div class="sub-menu-icon"><i class="os-icon os-icon-layout"></i></div>
            <div class="sub-menu-i">
                <ul class="sub-menu">
                    <li><a href="{{route('admin')}}"> Inicio</a></li>
                </ul>
            </div>
        </div>
    </li>
    <li class=" has-sub-menu"><a href="#">
            <div class="icon-w">
                <div class="os-icon os-icon-layers"></div>
            </div>
            <span>Clientes Register</span></a>
        <div class="sub-menu-w">
            <div class="sub-menu-header">Register</div>
            <div class="sub-menu-icon"><i class="os-icon os-icon-layers"></i></div>
            <div class="sub-menu-i">
                <ul class="sub-menu">
                    <li><a href="{{route('admin.clientes.index')}}">Cliente</a></li>
                    <li><a href="{{route('admin.administrador.index')}}">Administrator</a></li>
                </ul>
            </div>
        </div>
    </li>
    <li class="sub-header"><span>Pagos</span></li>
    <li class=" has-sub-menu"><a href="#">
            <div class="icon-w">
                <div class="os-icon os-icon-package"></div>
            </div>
            <span>Pagos</span></a>
        <div class="sub-menu-w">
            <div class="sub-menu-header">Pagos</div>
            <div class="sub-menu-icon"><i class="os-icon os-icon-package"></i></div>
            <div class="sub-menu-i">
                <ul class="sub-menu">
                    <li><a href="{{route('admin.pagos.index')}}">Pagos</a></li>
                    <li><a href="{{route('admin.pagos.create')}}">Enviar Pago</a></li>
                </ul>
            </div>
        </div>
    </li>
    <li class=" has-sub-menu"><a href="#">
            <div class="icon-w">
                <div class="os-icon os-icon-file-text"></div>
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

</ul>