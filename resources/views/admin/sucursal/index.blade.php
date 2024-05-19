@extends('admin.principal')
@section('contenido')
<input type="hidden" id="ruta" value="{{url('/')}}">
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Datos de sucursales</h3>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="card">
              <div class="card-body">


                <div class="row">
                  <div class="col-sm-12">
                    <div class="dataTables_length" id="order-listing_length">
                      <form class="form-inline">
                        <div>

                          <input class="form-control" id="buscar" name="buscar" type="text"
                            onkeypress="return soloLetras(event)" placeholder="Buscar por nombre,apellido....." />
                          <a href="" class="btn btn-dark" lass="input-group-text" id="basic-addon1">
                            <i class="fa fa-search" aria-hidden="true"></i>
                          </a>
                          <a href="" type="button" class="btn btn-dark" onclick="window.location.href=''">
                            <i class="fas fa-undo-alt"></i>
                          </a>
                          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                            data-target="#exampleModal-3" fdprocessedid="4otim4"><i class="fa fa-plus-circle fa-lg"
                              aria-hidden="true"></i> <b> Agregar nuevo</b><i></i></button>
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
                          <th class="text-center" style="color: #fff;">ID</th>
                          <th class="text-center" style="color: #fff;">NOMBRE</th>
                          <th class="text-center" style="color: #fff;">DIRECCION</th>
                          <th class="text-center" style="color: #fff;">ENCARGADO</th>
                          <th class="text-center" style="color: #fff;">ACCIONES</th>
                        </tr>
                      </thead>
                      <tbody id="data_persona">
                        <?php $contador = 1?>
                        @foreach ($sucursal as $item)
                        <tr>
                          <td class="text-center" scope="row">
                            <?php echo $contador;?>
                          </td>

                          <td class="text-center">{{$item->NOMBRE_SURCUSAL}}</td>
                          <td class="text-center">{{$item->DIRECCION}}</td>
                          <td class="text-center">{{$item->empleado->NOMBRE}}</td>
                          <td class="text-center">
                            <center>



                              <a class="btn btn-outline-info" href="#" title="Editar" data-toggle="modal"
                                data-target="#editModal{{$item->COD_SUCURSAL }}">
                                <i class="far fa-edit"></i></a>

                              <a href="#" class="btn btn-outline-danger eliminarSucursal"
                                action="{{ url('sucursales/destroy',$item->COD_SUCURSAL) }}" method="DELETE"
                                token="{{ csrf_token() }}" pagina="sucursales"><i class="far fa-trash-alt"></i></a>
                            </center>
                          </td>
                        </tr>
                        <!-- Modal EDITAR SUCURSAL -->
                        <div class="modal fade" id="editModal{{$item->COD_SUCURSAL}}" tabindex="-1" role="dialog"
                          aria-labelledby="editModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Editar sucursal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true"><b>X</b></span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <!-- Similar content as the original modal, adjusted for editing -->
                                <div id="editDivision">
                                  <form action="{{url('sucursales/update', $item->COD_SUCURSAL)}}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <label for="editCampo5">Nombre:</label>
                                    <input type="text" id="editCampo5" value="{{$item->NOMBRE_SURCUSAL}}" required
                                      name="nombre"><br>

                                    <label for="editCampo7">Direccion:</label>
                                    <input type="text" id="editCampo7" value="{{$item->DIRECCION}}" required
                                      name="direccion"><br>

                                    <label for="editCampo8">Seleccionar encargado:</label>
                                    <select name="cod_empleado" class="form-control selectric select2" id="select2">

                                      @foreach($empleado as $empleados)
                                      @if($empleados->COD_EMPLEADO==$item->EMPLEADO_COD)
                                      <option value="{{$empleados->COD_EMPLEADO}}" selected>{{$empleados->NOMBRE}}
                                        {{$empleados->APELLIDO}}</option>
                                      @else
                                      <option value="{{$empleados->COD_EMPLEADO}}">{{$empleados->NOMBRE}}</option>
                                      @endif
                                      @endforeach
                                    </select>

                                </div>
                                <div class="derecha">
                                  <br>
                                  <br>
                                  <button type="submit" class="btn btn-dark mr-2">Actualizar</button>
                                  <a href="#" class="btn btn-dark" data-dismiss="modal">Cancelar</a>
                                </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- FIN Modal EDITAR SUCURSAL -->
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



      <!-- Modal CREAR SUCURSAL -->
      <div class="modal fade" id="exampleModal-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-3"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel-3">Agregar sucursal</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><b>X</b></span>
              </button>
            </div>
            <div class="modal-body">
              <!-- División 2 -->
              <div id="division3">
                <form action="{{url('sucursales/store')}}" method="POST">
                  @csrf
                  <label for="campo5">Mombre:</label>
                  <input type="text" id="campo5" name="nombre" required><br>

                  <label for="campo7">Direccion:</label>
                  <input type="text" id="campo7" name="direccion" required><br>

                  <div class="form-group col-88">
                    <label for="nombre">Encargado</label>
                    <select name="cod_empleado" class="form-control selectric select2" id="select2">
                      @foreach($empleado as $item)
                      <option value="{{$item->COD_EMPLEADO}}">{{$item->NOMBRE}} {{$item->APELLIDO}}</option>
                      @endforeach
                    </select>
                  </div>
              </div>
              <div class="derecha">
                <br>
                <br>
                <button type="submit" class="btn btn-dark mr-2">Registrar</button>
                <a href="#" class="btn btn-dark" data-dismiss="modal">Cancelar</a>
              </div>
              </form>
            </div>
          </div>
        </div>
        <!--FIN Modal CREAR SUCURSAL -->



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
          let clase = 'eliminarSucursal';
          let mensaje = "De eliminar a este registro!";
          eliminarPorRuta(mensaje, clase);
          // $('body').on('keyup', '#buscar_no', function(){
          //   let buscar = $(this).val();
          //   $.ajax
          //   ({
          //     method:"POST",
          //     url: "{{url('personas/buscar')}}",
          //     dataType:"json",
          //     data:{'_token':'{{ csrf_token() }}',buscar:buscar},
          //     success: function(res)
          //     {
          //       let tabla = '';
          //       let contador = 0;
          //       $('#data_persona').html('');
          //       $.each(res, function(index, value)
          //       {
          //         contador++;
          //         let cod = value.cod_persona;
          //         let url = 'action="{{url('/')}}/personas/destroy/'+cod+'"';
          //         tabla = `<tr>
          //                   <td class="text-center">${contador}</td>
          //                   <td class="text-center">${value.nombre}</td>
          //                   <td class="text-center">${value.apellido}</td>
          //                   <td class="text-center">${value.celular}</td>
          //                   <td class="text-center">${value.celular_2}</td>
          //                   <td class="text-center">${value.direccion}</td>
          //                   <td class="text-center">
          //                     <center>
          //                       <button type="button" class="btn btn-warning btn-sm mx-2" data-toggle="modal" data-target="#editarPersona${cod}">
          //                         <i class="fa fa-pencil" aria-hidden="true"></i>
          //                       </button>
          //                       <button class="btn btn-danger btn-sm mx-2 eliminarPersona" ${url}method="DELETE" token="{{csrf_token()}}" pagina="personas">
          //                         <i class="fa fa-trash" aria-hidden="true"></i>
          //                       </button>
          //                     </center>
          //                   </td>
          //                 </tr>`;
          //         $('#data_persona').append(tabla);
          //       })
          //     }
          //   });
          // });

        </script>
        <script type="text/javascript">

          $(document).on("click", ".eliminarSucursal", function () {
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