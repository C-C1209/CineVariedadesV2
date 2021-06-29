<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div >
        <a class="navbar-brand" href="" style="background-image: url('{{asset('/clean/assets/img/logo.png')}}'); height:50px; width:300px; background-size: contain; background-repeat: no-repeat; margin-top:30px;"></a>
            
    </div>

    <span class="brand-link brand-text font-weight-light" style="text-align: center; display:block;"><b>Bienvenido</b> <br></span>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->


        <!-- 'en font awasome tenemos todos los iconos o como se llaman ' -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="/admin/" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <img src="../img/deportes.png" class="" alt="">
                        <p>
                            Inicio
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/usuarios" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Usuarios
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <!--  <a href="php/invoice_list/invoice_list.php" class="nav-link">  -->
                    <a href="./cedulas.php" class="nav-link">
                        <i class="nav-icon fas fa-address-book"></i>
                        <p>
                            Funciones
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/peliculas" class="nav-link">
                        <i class="nav-icon fas fa-address-book"></i>
                        <p>
                            Peliculas
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Log Out
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>