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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
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
                            @if (Auth::user()->imagen_user)
                                <img src="{{ url(Auth::user()->imagen_user) }}" alt="" >
                            @else
                                <img src="{{ url('images/user/fotoPerfil.jpeg') }}" alt="" >
                            @endif
                            {{-- <img src="{{asset('images/user/fotoPerfil.jpeg')}}" alt="profile" /> --}}
                            <span style="color: white">{{ Auth::user()->name}} {{ Auth::user()->apellido}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" href="{{route('login')}}" onclick="event.preventDefault();
                                this.closest('form').submit();"> <i class="mdi mdi-logout"></i> <span class="nav-text">Salir</span> </a>      
                            </form>
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
                            <i class="fa fa-home menu-icon "></i>
                            <span class="menu-title">Inicio</span>
                        </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false"
                        aria-controls="ui-advanced">
                        <i class="fa fa-users menu-icon"></i>
                        <span class="menu-title">Gestion de Usuarios</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-advanced">
                        <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                                <a class="nav-link" href="">Usuarios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('ingresoOrdenCompra.index')}}">Ingreso Orden Compra</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('ingresoInicial.index')}}">Ingreso Inicial</a>
                            </li>
                        </ul>
                    </div>
                </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="fa fa-user menu-icon"></i>
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
                <i class="fa fa-truck menu-icon"></i>
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
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="fa fa-stop-circle menu-icon"></i>
              <span class="menu-title">Gestion de caja</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link"  href="{{route('cajas.index')}}">Apertura de caja</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('ordeDeCompra.index')}}">
                <i class="fas fa-shopping-cart menu-icon"></i>
              <span class="menu-title">Gestion de compras</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="true" aria-controls="e-commerce">
              <i class="fas fa-shopping-cart menu-icon"></i>
              <span class="menu-title">Gestion de ventas</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse show" id="e-commerce" style="">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="" previewlistener="true"> Ventas al contado  </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('credito.index')}}" previewlistener="true"> Ventas al credito</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
                <i class="fa fa-tags menu-icon"></i>
              <span class="menu-title">Gestion de ingreso</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('salida.index')}}">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Gestion de salidas</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('sucursales.index')}}">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Gestion de sucrsales</span>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Gestion de almacen</span>
            </a>
          </li>--}}
          <li class="nav-item">
            <a class="nav-link" href="{{route('items.index')}}">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Gestion de items</span>
            </a>
          </li>
          {{--<li class="nav-item">
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
          </li>--}}
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="{{asset('js/file-upload.js')}}"></script>
    <script src="{{asset('js/typeahead.js')}}"></script>
    <script>
        function soloNumeros(e) {
            var key = e.keyCode || e.which,
                tecla = String.fromCharCode(key),
                numeros = "0123456789",
                especiales = [8, 37, 39, 46],
                tecla_especial = false;
                for (var i in especiales) {
                    if (key == especiales[i]) {
                    tecla_especial = true;
                    break;
                    }
                }
                if (numeros.indexOf(tecla) == -1 && !tecla_especial) {
                    return false;
                }
            }
    </script>
    @yield('script')
</body>

</html>