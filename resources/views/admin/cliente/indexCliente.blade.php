@extends('admin.principal')
@section('contenido')

{{-- Modal CREAR CLIENTE --}}
<div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2"
  aria-hidden="true" style="display: none;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel-2">Agregar cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><B>X</B></span>
        </button>
      </div>
      <div class="modal-body">
        <div id="partition1" class="container">
          <div class="row">
            <div class="col-lg-6">
              <form action="{{ route('clientes.store') }}" method="POST">
                @csrf

                <label for="campo1">Nombre:</label>
                <input type="text" id="campo1" name="nombre" type="text" required><br>

                <label for="campo2">Apellidos</label>
                <input type="text" id="campo2" name="apellido" required><br>
                <label for="campo5">C.I:</label>
                <input type="number" id="campo5" name="ci" type="number" required><br>

                <label for="campo33">Celular :</label>
                <input type="number" id="campo33" name="celular" type="number" required><br>

                <label for="campo4">Celular 2:</label>
                <input type="number" id="campo4" name="celular_2" type="number"><br>
            </div>
            <div class="col-lg-6">
              <label for="campo5">Direccion:</label>
              <input type="text" id="campo5" name="direccion" required><br>
              <label for="campo5">Correo:</label>
              <input type="text" id="campo5" name="correo" type="email" required><br>

              <label for="campo6">Ingresar URL ubicacion GPS:</label>
              <input type="text" id="campo6" name="url" required><br>
              <label for="campo7">Nit:</label>
              <input type="number" id="campo7" name="nit"><br>
              <br>
              <br>
              <br>
              <div class="derecha">

                <button type="submit" onclick="qr()" class="btn btn-dark mr-2">Registrar</button>
                </form action="{{ route('clientes.store') }}" method="POST">
                <a href="{{route('clientes.index')}}" class="btn btn-dark">Cancelar</a>
                <a href="https://www.google.com/maps/@-17.6028396,-63.1207562,4216m/data=!3m1!1e3?entry=ttu"
                  class="btn btn-dark" target="_blank">Mapa <i class="fa fa-map"></i></a>


              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- FIN Modal CREAR CLIENTE --}}






<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        Clientes
      </h3>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="card">

              <div class="card-body">
                <div id="order-listing_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                  <div class="row">
                    <div class="col-sm-12 ">
                      <div class="dataTables_length" id="order-listing_length">
                        <form class="form-inline">
                          <div>
                            <input class="form-control" id="buscar" name="buscar" type="text"
                              onkeypress="return soloLetras(event)" placeholder="Buscar por nombre....." />

                            <button type="submit" class="btn btn-dark">
                              <span class="" id="basic-addon1"><i class="fa fa-search" aria-hidden="true"></i></span>
                            </button>
                            <a onclick="window.location.href='{{ route('clientes.index') }}'" class="btn btn-dark">
                              <i class="fas fa-undo-alt"></i>
                            </a>
                            </a>
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                              data-target="#exampleModal-2" fdprocessedid="4otim4"><i class="fa fa-plus-circle fa-lg"
                                aria-hidden="true"></i> <b> Agregar nuevo</b><i></i></button>

                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <br>
                <div class="card-block table-border-style">
                  <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="table">
                      <thead class="bg-primary">
                        <tr>
                          <th class="text-center" style="color: #fff;">#</th>
                          <th class="text-center" style="color: #fff;">NOMBRE</th>
                          <th class="text-center" style="color: #fff;">APELLIDOS</th>
                          <th class="text-center" style="color: #fff;">CI</th>
                          <th class="text-center" style="color: #fff;">CELULAR</th>
                          <th class="text-center" style="color: #fff;">CELULAR 2</th>
                          <th class="text-center" style="color: #fff;">CORREO</th>
                          <th class="text-center" style="color: #fff;">DIRECCION</th>
                          <th class="text-center" style="color: #fff;">Acciones</th>
                        </tr>
                      </thead>
                      <tbody id="data_persona">
                        <?php $contador = 1?>
                        @foreach ($clientes as $item)
                        <tr>
                          <td class="text-center" scope="row">
                            <?php echo $contador;?>
                          </td>
                          <td class="text-center">{{$item->NOMBRE}}</td>
                          <td class="text-center">{{$item->APELLIDO}}</td>
                          <td class="text-center">{{$item->CI}}</td>
                          <td class="text-center">{{$item->CELULAR}}</td>
                          <td class="text-center">{{$item->CELULAR_2}}</td>
                          <td class="text-center">{{$item->CORREO}}</td>
                          <td class="text-center">{{$item->DIRECCION}}</td>
                          <td class="text-center" style="width: 20%;">
                            <a class="btn btn-outline-warning" href="{{ route('clientes.show', $item->COD_CLIENTE) }}">
                              <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>
                            <a class="btn btn-outline-info" href="#" title="Editar"
                            data-toggle="modal"   data-target="#editarProveedorModal{{$item->COD_CLIENTE}}">
                                <i class="far fa-edit"></i></a>

                            <a href="#" class="btn btn-outline-danger eliminarCliente"
                              action="{{ url('clientes/destroy',$item->COD_CLIENTE)}}" method="DELETE"
                              token="{{ csrf_token() }}" pagina="clientes"><i class="far fa-trash-alt"></i></a>
                          </td>
                        </tr>

                                {{-- modal para editar --}}
                                 <!-- Modal EDITAR CLIENTE -->
                                 <div class="modal fade" id="editarProveedorModal{{$item->COD_CLIENTE}}" tabindex="-1" role="dialog" aria-labelledby="editarProveedorModal" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="editarProveedorModalTitle">Editar cliente</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true"><B>X</B></span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
                                            <div id="partition1" class="container">
                                                <div class="row">
                                                  <div class="col-lg-6"> 
                                                    <form action="{{ route('clientes.update',$item->COD_CLIENTE) }}" method="POST"method="POST">
                                                      @csrf
                                                      @method('PUT')
                                                      <input type="text" name="cod_persona" value="{{$item->COD_CLIENTE}}" hidden >
                                                  
                                                      <label for="campo1">Nombre:</label>
                                                      <input type="text" id="campo1" value="{{$item->NOMBRE}}" name="nombre" required><br>
                                      
                                                      <label for="campo2">Apellidos</label>
                                                      <input type="text" id="campo2" value="{{$item->APELLIDO}}" name="apellido" required><br>
                                                      <label for="campo5">C.I:</label>
                                                      <input type="text" id="campo5" value="{{$item->CI}}" name="ci" type="number" required><br>
                                      
                                                      <label for="campo33">Celular :</label>
                                                      <input type="text" id="campo33" value="{{$item->CELULAR}}" name="celular" required><br>
                                                      <label for="campo4">Celular 2:</label>
                                                      <input type="text" value="{{$item->CELULAR_2}}" id="campo4" name="celular_2"><br>
                                                     
                                                        </div>
                                                        <div class="col-lg-6">
                                                          
                                                          <label for="campo5">Direccion:</label>
                                                          <input type="text" id="campo5" value="{{$item->DIRECCION}}" name="direccion" required><br>
                                                          <label for="campo5">Correo:</label>
                                                          <input type="text" id="campo5" value="{{$item->CORREO}}" name="correo" type="email" required><br>
                                                         
                                                          <label for="campo6">Ingresar URL ubicacion GPS:</label>
                                                          <input type="text" id="campo6" value="{{$item->URL_DIRECCION}}" name="url" required><br>
                                          
                                                          <label for="campo7">Nit:</label>
                                                          <input type="text" id="campo7" name="nit" value="{{$item->NIT}}" ><br>
                                                          <br>
                                                          <br>
                                                          <br>
                                                          <div class="derecha">
                                                            <button type="submit" onclick="qr()" class="btn btn-dark mr-2">Actualizar</button>
                                                          </form action="{{ route('clientes.store') }}" method="POST">
                                                              <a href="{{route('clientes.index')}}" class="btn btn-dark">Cancelar</a>  
                                                              <a href="https://www.google.com/maps/@-17.6028396,-63.1207562,4216m/data=!3m1!1e3?entry=ttu" class="btn btn-dark" target="_blank">Mapa <i class="fa fa-map"></i></a>
                                                          </div>
                                                        </div>
                                                    </form> 
                                                </div>
                                  </div>
                              </div>
                              <!-- fin Modal EDITAR CLIENTE -->
                              {{-- fin modal editar --}}



                        <?php  $contador++;?>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endsection
      @section('script')
      @if (session('mensaje') == 'ok')
      <script>
        Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Realizado correctamente',
          showConfirmButton: false,
          timer: 1500
        })
      </script>
      @endif
      <script type="text/javascript">

        $(document).on("click", ".eliminarCliente", function () {
          var ruta = $("#ruta").val();
          let action = $(this).attr("action");
          let method = $(this).attr("method");
          let token = $(this).attr("token");
          let pagina = $(this).attr("pagina");
          Swal.fire({
            title: 'Estas seguro?',
            text: "De eliminar al cliente!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, eliminar!',
            cancelButtonText: 'Cancelar'
          }).then((result) => {
            if (result.isConfirmed) {
              let datos = new FormData();
              datos.append("_method", method);
              datos.append("_token", token);
              $.ajax
                ({
                  url: action,
                  method: "POST",
                  data: datos,
                  cache: false,
                  contentType: false,
                  processData: false,
                  success: function (res) {
                    if (res == "ok") {
                      Swal.fire({
                        type: 'success',
                        title: 'El registro ha sido eliminado.',
                        showConfirmButton: true,
                        confirmButtonText: 'Cerrar',
                      }).then((result) => {
                        if (result.isConfirmed) {
                          window.location = ruta + '/' + pagina;
                        }
                      });
                    }
                  }
                })
            }
          });
        });
      </script>
      @endsection