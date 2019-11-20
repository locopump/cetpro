<aside class="main-sidebar elevation-4 {{ $sidebar_user->sidebar->clase }}">
    <!-- Brand Logo -->
    <a href="home" class="brand-link {{ $brandlogo_user->brandlogo->clase }}">
        <img src="images/cetpro_slg.png" alt="Cetpro Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Cetpro ASB</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{Auth::user()->foto}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                @can('inicio.index')
                <li class="nav-item">
                    <a href="home" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Inicio</p>
                    </a>
                </li>
                @endcan
                @can('sistema.index')
                <li class="nav-item">
                    <a href="sistema" class="nav-link {{ Request::is('sistema') ? 'active' : '' }}">
                        <i class="nav-icon fab fa-windows"></i>
                        <p>Sistema</p>
                    </a>
                </li>
                @endcan
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
