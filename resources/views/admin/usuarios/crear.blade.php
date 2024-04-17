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
                        <span class="menu-title">Gestion de clientes</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/accordions.html">Accordions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a>
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
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Datos del usuario
            </h3>
          </div>
          <div class="card">
            <div class="card-body">
            <div class="card">
              <div class="card-body">
                        <div class="table-responsive">
                            <div id="order-listing_wrapper"
                                class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12 ">
                                    <div class="row">
          
                                    <div class="card-body">  
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group row">
                                              <div class="col-sm-9">
                                                <h6>Nombre</h6>
                                                  <input type="text" name="name" id="name" class="form-control" 
                                                  placeholder="Escriba un nombre" required onkeypress="return soloLetras(event)" />
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="form-group row">
                                                <div class="col-sm-9">
                                                  <h6>Correo electronico</h6>
                                                    <input type="email" class="form-control" name="email" id="email"  aria-describedby="emailHelpId"
                                                     placeholder="Escriba un gmail valido" required >
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group row">
                                              <div class="col-sm-9">
                                                <h6>Contraseña</h6>
                                                <input type="password" class="form-control" name="password" placeholder="Contraseña">     
                                                  <span class="error text-danger" for="input-password"></span>         
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <label for="roles" class="col-sm-2 col-form-label">Roles</label>
                                          <div class="col-sm-7">
                                              <div class="form-group">
                                                  <div class="tab-content">
                                                      <div class="tab-pane active">
                                                          <table class="table">
                                                              <tbody>
                                                                  <tr>
                                                                      <td>
                                                                          <div class="form-check">
                                                                              <label class="form-check-label">
                                                                                  <input class="checkbox" type="checkbox" name="roles[]"
                                                                                      value="" >                                                                               
                                                                              </label>
                                                                          </div>
                                                                      </td>
                                                                      <td>
                                                                        admin       
                                                                      </td>
                                                                  </tr> 
                                                              </tbody>
                                                          </table>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          </div>
                                        <br/>  
                                        <button type="submit" class="btn btn-dark mr-2">Registrar</button>
                                        <a href="" class="btn btn-dark mr-2"> Cancelar</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('vendor/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('vendor/js/vendor.bundle.addons.js')}}"></script>
  <script src="{{asset('js/off-canvas.js')}}"></script>
  <script src="{{asset('js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('js/misc.js')}}"></script>
  <script src="{{asset('js/settings.js')}}"></script>
  <script src="{{asset('js/todolist.js')}}"></script>
  <script src="{{asset('js/dashboard.js')}}"></script>
  <script src="{{asset('js/data-table.js')}}"></script>
</body>

</html>