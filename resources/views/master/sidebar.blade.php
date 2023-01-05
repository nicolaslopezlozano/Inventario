    <!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            {{-- Inicio --}}
            <li class="nav-item start ">
                <a href="{{ asset('home') }}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Inicio</span>
                    <span class="arrow"></span>
                </a>
            </li>
            {{-- Usuarios --}}
            @if(Entrust::can('acceder-usuarios'))
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-user"></i>
                        <span class="title">Usuarios</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        @if(Entrust::can('asignacion-permisos'))
                            <li class="nav-item  ">
                                <a href="javascript;" class="nav-link ">
                                    <i class="fa fa-arrows-alt"></i>
                                    <span class="title">Permisos</span>
                                </a>
                            </li>
                        @endif
                        @if(Entrust::can('ver-jefes-proceso'))
                            <li class="nav-item  ">
                                <a href="{{ route('usuario.list') }}" class="nav-link ">
                                    <i class="icon-users"></i>
                                    <span class="title">Jefes de Proceso</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>
            @endif

            {{-- Agentes --}}
            @if(Entrust::can('acceder-agentes'))
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-user"></i>
                        <span class="title">Agentes</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        @if(Entrust::can('ver-proveedores'))
                            <li class="nav-item ">
                                <a href="{{ route('proveedor.list') }}" class="nav-link ">
                                    <i class="fa fa-truck"></i>
                                    <span class="title">Proveedores</span>
                                </a>
                            </li>
                        @endif
                        @if(Entrust::can('ver-detallistas'))
                            <li class="nav-item  ">
                                <a href="{{ route('detallista.list') }}" class="nav-link ">
                                    <i class="fa fa-male"></i>
                                    <span class="title">Detallistas</span>
                                </a>
                            </li>
                        @endif
                        @if(Entrust::can('ver-distribuidores'))
                            <li class="nav-item  ">
                                <a href="{{ route('distribuidor.list') }}" class="nav-link ">
                                    <i class="fa fa-bookmark"></i>
                                    <span class="title">Distribuidores</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>
            @endif

            {{-- Producción --}}
            @if(Entrust::can('acceder-produccion'))
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-bar-chart"></i>
                        <span class="title">Producción</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        @if(Entrust::can('ver-costo-transporte'))
                            <li class="nav-item  ">
                                <a href="{{ route('costotransporte.list') }}" class="nav-link ">
                                    <i class="fa fa-dollar"></i>
                                    <span class="title">Costos de Transporte por Ciudad</span>
                                </a>
                            </li>
                        @endif
                        @if(Entrust::can('ver-compra-proveedores'))
                            <li class="nav-item  ">
                                <a href="{{ route('compraproveedor.list') }}" class="nav-link ">
                                    <i class="fa fa-money"></i>
                                    <span class="title">Compra a Proveedores</span>
                                </a>
                            </li>
                        @endif
                        @if(Entrust::can('ver-produccion-dia'))
                            <li class="nav-item  ">
                                <a href="{{ route('produccion.list') }}" class="nav-link ">
                                    <i class="fa fa-upload"></i>
                                    <span class="title">Producción por Día</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>
            @endif

            {{-- Spaguetti --}}
            @if(Entrust::can('acceder-spaguetti'))
                <li class="nav-item  ">
                    <a href=" {{ route('spaghetti.index') }} " class="nav-link nav-toggle">
                        <i class="fa fa-pagelines"></i>
                        <span class="title">Spaghetti</span>
                        <span class="arrow"></span>
                    </a>
                </li>
            @endif

            {{-- Carrito --}}
            @if(Entrust::can('acceder-carrito'))
            <li class="nav-item  ">
                <a href="" class="nav-link nav-toggle">
                    <i class="icon-basket"></i>
                    <span class="title">Carrito</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    @if(Entrust::can('ver-pedido'))
                        <li class="nav-item  ">
                            <a href="maps_google.html" class="nav-link ">
                                <i class="fa fa-map"></i>
                                <span class="title">Pedido</span>
                            </a>
                        </li>
                    @endif
                    @if(Entrust::can('ver-carrito'))
                        <li class="nav-item  ">
                            <a href=" {{ route('carrito.index') }} " class="nav-link ">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="title">Carrito de Compras</span>
                            </a>
                        </li>
                    @endif
                </ul>
            </li>
            @endif
            
            {{-- Inventario --}}
            @if(Entrust::can('acceder-inventario'))
                <li class="nav-item  ">
                <a href="{{ route('inventario.index') }}" class="nav-link nav-toggle">
                        <i class="fa fa-list-ul"></i>
                        <span class="title">Inventario</span>
                        <span class="arrow"></span>
                    </a>
                </li>
            @endif
            
            {{-- Utilidad --}}
            @if(Entrust::can('acceder-utilidad'))
                <li class="nav-item  ">
                    <a href="javascript;" class="nav-link nav-toggle">
                        <i class="fa fa-area-chart"></i>
                        <span class="title">Utilidad</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{ route('utilidad.diario') }}" class="nav-link ">
                            <i class="fa fa-bar-chart"></i>
                            <span class="title">Diario</span>
                        </a>
                        <a href="{{ route('utilidad.mensual') }}" class="nav-link ">
                            <i class="fa fa-line-chart"></i>
                            <span class="title">Mensual</span>
                        </a>
                    </li>                                
                </ul>
                </li>
            @endif

            {{-- Perfil --}}
            <li class="nav-item  ">
                <a href="{{ route('usuario.perfil') }}" class="nav-link nav-toggle">
                    <i class="icon-settings"></i>
                    <span class="title">Perfil</span>
                    <span class="arrow"></span>
                </a>
                {{-- <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{ route('usuario.perfil') }}" class="nav-link ">
                            <i class="fa fa-cog"></i>
                            <span class="title">Perfil</span>
                        </a>
                    </li>                                
                </ul> --}}
            </li>

        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->