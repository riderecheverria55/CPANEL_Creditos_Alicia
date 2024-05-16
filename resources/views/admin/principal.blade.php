<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Admin Creditos Alicia</title>
    <link rel="stylesheet" href="{{asset('plugins/font-awesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.addons.css')}}" />
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <link rel="shortcut icon" href="http://www.urbanui.com/" />
    <link rel="stylesheet" href="{{asset('plugins/sweetalert2/dist/sweetalert2.min.css')}}">
    <link href="{{asset('css/formulario_modal.css')}}" rel="stylesheet" />
    <link href="{{asset('css/modal_crear_proveedor.css')}}" rel="stylesheet" />
    
</head>

<body>
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
                                <a class="nav-link" href="">Usuarios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Roles</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Permisos</a>
                            </li>
                        </ul>
                    </div>
                </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="far fa-compass menu-icon"></i>
                            <span class="menu-title">Gestion de Clientes</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('clientes.index')}}">Clientes</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="fas fa-table menu-icon"></i>
              <span class="menu-title">Gestion de proveedor</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('proveedores.index')}}">Proveedor</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('sucursales.index')}}">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Gestion de sucrsales</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('items.index')}}">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Items</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse"  aria-expanded="false" aria-controls="auth">
              <i class="fas fa-window-restore menu-icon"></i>
              <span class="menu-title">Inventario</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Producto </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Categoria </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Marca </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html">  </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html">  </a></li>
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
    {{-- <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
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
    <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="index-2.html">
                        <i class="fa fa-home menu-icon"></i>
                        <span class="menu-title">Inicio</span>
                    </a>
                </li>
             
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                        aria-controls="ui-basic">
                        <i class="far fa-compass menu-icon"></i>
                        <span class="menu-title">Gestion de clientes</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('clientes.index')}}">Clientes</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </div> --}}
    <script src="{{asset('vendor/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('vendor/js/vendor.bundle.addons.js')}}"></script>
    <script src="{{asset('js/off-canvas.js')}}"></script>
    <script src="{{asset('js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('js/misc.js')}}"></script>
    <script src="{{asset('js/settings.js')}}"></script>
    <script src="{{asset('js/todolist.js')}}"></script>
    <script src="{{asset('js/dashboard.js')}}"></script>
    <script src="{{asset('plugins/sweetalert2/dist/sweetalert2.min.js')}}"></script>
    <script src="{{asset('js/select2.js')}}"></script>
    @yield('script')
</body>

</html>