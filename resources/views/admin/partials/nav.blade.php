
<li {{request()->is('admin')?'class=active':''}}><a href="{{route('admin')}}" class="waves-effect waves-cyan"><i class="mdi-action-home"></i> Inicio</a>
</li>
<li class="no-padding">
    <ul class="collapsible collapsible-accordion">
        <li  {{request()->is('admin/clientes*')?'class=active':''}}><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-social-person-add"></i> Registrar</a>
            <div class="collapsible-body">
                <ul>
                    <li {{request()->is('admin/clientes')?'class=active':''}}><a href="{{route('admin.clientes.index')}}">Cliente</a>
                    </li>
                    <li {{request()->is('admin/administrador')?'class=active':''}}><a href="{{route('admin.administrador.index')}}">Administrator</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="bold {{request()->is('admin/pagos*')?'active':''}}"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-maps-local-atm"></i> Pagos</a>
            <div class="collapsible-body">
                <ul>
                    <li {{request()->is('admin/pagos')?'class=active':''}}><a href="{{route('admin.pagos.index')}}">Enviar Pago</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="bold {{request()->is('admin/notificaciones*')?'active':''}}"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-social-notifications-on"></i> Notificaciones
                <span id="view_count_notify" class="new badge red"></span></a>
            <div class="collapsible-body">
                <ul>
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
        </li>
        <li class="bold {{request()->is('admin/perfil')?'active':''}}"><a href="{{route('admin.perfil.index')}}" class="waves-effect waves-cyan"><i class="mdi-action-face-unlock"></i>Mi Perfil</a>
        </li>
        <li class="bold {{request()->is('admin/posts')?'active':''}}"><a href="{{route('admin.posts.index')}}" class="waves-effect waves-cyan"><i class="mdi-action-settings"></i>Config Web Page</a>
        </li>
        <li class="bold">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" class="waves-effect waves-cyan"><i class="mdi-action-settings-power"></i>
                Salir
            </a>
        </li>

        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </ul>
</li>
