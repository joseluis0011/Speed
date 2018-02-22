
<ul class="main-menu">
    <li class="has-sub-menu"><a href="#">
            <div class="icon-w">
                <div class="os-icon os-icon-layout"></div>
            </div>

            <span>Inicio</span></a>
        <ul class="sub-menu">
            <li><a href="{{route('admin')}}"> Inicio</a></li>
        </ul>
    </li>

    <li class="has-sub-menu"><a href="#">
            <div class="icon-w">
                <div class="os-icon os-icon-layers"></div>
            </div>
            <span>Registrar</span></a>
        <ul class="sub-menu">
            <li><a href="{{route('admin.clientes.index')}}">Cliente</a></li>
            <li><a href="{{route('admin.administrador.index')}}">Administrator</a></li>
        </ul>
    </li>
    <li class="has-sub-menu"><a href="#">
            <div class="icon-w">
                <div class="os-icon os-icon-credit-card"></div>
            </div>
            <span>Pagos</span></a>
        <ul class="sub-menu">
            <li><a href="{{route('admin.pagos.index')}}">Pagos</a></li>
            <li><a href="{{route('admin.pagos.create')}}">Enviar Pago</a></li>

        </ul>
    </li>
    <li class="has-sub-menu"><a href="#">
            <div class="icon-w">
                <div class="os-icon os-icon-settings"></div>
            </div>
            <span>Configuraciones</span></a>
        <ul class="sub-menu">
            <li><a href="{{route('admin.posts.index')}}">Config Web Page</a></li>

        </ul>
    </li>

</ul>
