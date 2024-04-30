<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('plugins/font-awesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.addons.css')}}" />
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <link rel="shortcut icon" href="http://www.urbanui.com/" />
    <link href="{{asset('css/formulario_modal.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style_show.css')}}" rel="stylesheet" />
    <!-- plugins:css -->
    
    @yield('styles')
    
</head>

<body>
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
    @include('layouts._nav')
    
  <!-- plugins:js -->
    <script src="{{asset('vendor/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('vendor/js/vendor.bundle.addons.js')}}"></script>
    <script src="{{asset('js/off-canvas.js')}}"></script>
    <script src="{{asset('js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('js/misc.js')}}"></script>
    <script src="{{asset('js/settings.js')}}"></script>
    <script src="{{asset('js/todolist.js')}}"></script>
    <script src="{{asset('js/dashboard.js')}}"></script>
    <script src="{{asset('js/script_qr.js')}}"></script>

     <!-- plugins:js -->
 
  

  @yield('scripts')
    
</body>

</html>
