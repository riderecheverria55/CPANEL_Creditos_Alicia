

<div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="index.html"><img src="{{asset('imagenes/logos/logo ca.png')}}"
                    alt="logo" /></a>
            <a class="navbar-brand brand-logo-mini" href="index.html"><img
                    src="{{asset('imagenes/logos/logo ca-mini.png')}}" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="fas fa-bars"></span>
            </button>
            <ul class="navbar-nav">
                <li class="nav-item nav-search d-none d-md-flex">
                    <div class="nav-link">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-search"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search" aria-label="Search" />
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                        <img src="{{asset('imagenes/Cristian Antezana.jpeg')}}" alt="profile" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item">
                            <i class="fas fa-cog text-primary"></i>
                            Salir
                        </a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-toggle="offcanvas">
                <span class="fas fa-bars"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="index-2.html">
                        <i class="fa fa-home menu-icon"></i>
                        <span class="menu-title">Inicio</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false"
                        aria-controls="ui-advanced">
                        <i class="fas fa-clipboard-list menu-icon"></i>
                        <span class="menu-title">Gestion de Usuarios</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-advanced">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/dragula.html">Roles</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/clipboard.html">Permisos</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                        aria-controls="ui-basic">
                        <i class="far fa-compass menu-icon"></i>
                        <span class="menu-title">Gestion de ventas</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/accordions.html">Registro de cliente</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/buttons.html">Registro de venta</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/badges.html">Badges</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/breadcrumbs.html">Breadcrumbs</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
      <!-- partial -->
      @yield('contenido') 
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->