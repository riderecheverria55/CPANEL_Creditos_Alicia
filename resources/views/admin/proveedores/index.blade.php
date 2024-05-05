@extends('admin.principal')
@section('contenido')
    {{-- Modal CREAR PROVEEDOR  --}}
    <div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2"aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel-2">Informacion personal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><B>X</B></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="partition1" class="container">
                        <div class="row">
                            <form action="{{url('proveedores/store')}}" method="POST">
                                @csrf
                                <div class="col-lg-6"> 
                                    <label for="campo1">Nombre:</label>
                                    <input type="text" id="campo1" name="nombre" required><br>
                                    <label for="campo2">Celular:</label>
                                    <input type="number" id="campo2" name="celular" required><br>
                                    <label for="campo3">Celular:</label>
                                    <input type="number" id="campo3" name="celular_2"><br>
                                    <label for="campo4">Correo :</label>
                                    <input type="text" id="campo4" name="correo"><br>
                                </div>
                                <div class="col-lg-6">
                                    <label for="campo5">Numero NIT:</label>
                                    <input type="text" id="campo5" name="nit"><br>
                                    <label for="campo7">Direccion:</label>
                                    <input type="text" id="campo7" name="direccion"><br>
                                    <br>
                                    <div class="derecha">
                                    <button  type="submit" class="btn btn-dark mr-2">Registrar</button>
                                    <a href="#" class="btn btn-dark" data-dismiss="modal">Cancelar</a>  
                                    </div>
                                </div>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="ruta" value="{{url('/')}}">
        <!-- Modal CREAR PROVEEDOR -->

      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="page-header card">
              <div class="card-block">
                @if (session('status'))
                    <div class="alert alert-success">{{session('status') }}</div>
                @endif
                <div class="card-body">
                  <form action="{{route('proveedores.index')}}" method="GET" class="form_date" id="formulario">
                    <div class="row">
                      <div class="input-group col-4">
                          <input class="form-control" id="buscar" name="buscar" type="text"  onkeypress="return soloLetras(event)" placeholder="Buscar por nombre,apellido....."/>
                          <div class="input-group-prepend">
                            <button type="submit">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-search" aria-hidden="true"></i></span>
                            </button>
                          </div>
                          <button type="button" style="float: right; color: white; font-weight: bold;margin-left: 5px;padding-left: 16px;
                              padding-right: 16px; " class="btn btn-success"
                              onclick="window.location.href='{{ route('proveedores.index') }}'">
                              <i class="fa fa-refresh" aria-hidden="true"></i>
                          </button>
                      </div>
                      <div class="form-group col-8">      
                        <button type="button" style="float: right; color: white; font-weight: bold;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-2">
                          Registrar Proveedor  <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                        </button>
                      </div>
                    </div>
                  </form>

                  <div class="card-block table-border-style">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped table-hover" id="table">
                        <thead class="bg-primary">
                            <tr>
                                <th class="text-center" scope="col">ID</th>
                                <th class="text-center" scope="col">NOMBRE</th>
                                <th class="text-center" scope="col">CELULAR</th>
                                <th class="text-center" scope="col">TELEFONO</th>
                                <th class="text-center" scope="col">COREEO</th>
                                <th class="text-center" scope="col">DIRECCION</th>
                                <th class="text-center" scope="col">NIT</th>
                                <th class="text-center" scope="col">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody id="data_persona">
                          <?php $contador = 1?>
                          @foreach ($proveedores as $item)
                            <tr>
                              <td  class="text-center" scope="row"><?php echo $contador;?></td>
                         
                              <td class="text-center">{{$item->NOMBRE}}</td>
                              <td class="text-center">{{$item->CELULAR}}</td>
                              <td class="text-center">{{$item->CELULAR_2}}</td>
                              <td class="text-center">{{$item->CORREO}}</td>
                              <td class="text-center">{{$item->DIRECCION}}</td>
                              <td class="text-center">{{$item->NIT}}</td>
                              <td class="text-center">     
                                <center>
                                  <button type="button" " class="btn btn-warning btn-sm mx-2" data-toggle="modal"
                                  data-target="#editarProveedorModal{{$item->COD_PROVEEDOR}}"><i class="fa fa-pencil" aria-hidden="true"></i>
                                  </button>
                                  <button class="btn btn-danger btn-sm mx-2 eliminarProveedor" action="{{ url('proveedores/destroy',$item->COD_PROVEEDOR) }}"
                                    method="DELETE" token="{{ csrf_token() }}" pagina="proveedores">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                  </button>
                                </center>
                              </td>
                            </tr>
                                {{-- modal para editar --}}
                                 <!-- Modal EDITAR PROVEEDOR -->
                                 <div class="modal fade" id="editarProveedorModal{{$item->COD_PROVEEDOR}}" tabindex="-1" role="dialog" aria-labelledby="editarProveedorModal" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editarProveedorModalTitle">Editar proveedor</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"><B>X</B></span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="infoPersonalForm" action="{{ url('proveedores/update', $item->COD_PROVEEDOR) }}" method="POST">
                                                    @method('PUT')
                                                    @csrf
                                                    <div id="division1">
                                                        <label for="campo1">Nombre:</label>
                                                        <input type="text" id="campo1" value="{{$item->NOMBRE}}" name="nombre" required><br>
                                                        <label for="campo2">Celular:</label>
                                                        <input type="number" id="campo2" value="{{$item->CELULAR}}" name="celular" required><br>
                                                        <label for="campo3">Celular:</label>
                                                        <input type="number" id="campo3" value="{{$item->CELULAR_2}}" name="celular_2"><br>
                                                        <label for="campo4">Correo :</label>
                                                        <input type="text" id="campo4" value="{{$item->CORREO}}" name="correo"><br>
                                                    </div>
                                                    <div id="division2">
                                                            <label for="campo5">Numero NIT:</label>
                                                            <input type="text" id="campo5" value="{{$item->NIT}}"  name="nit"><br>
                                                            <label for="campo7">Direccion:</label>
                                                            <input type="text" id="campo7" value="{{$item->DIRECCION}}"  name="direccion"><br>
                                                    </div>
                                                    <div class="derecha">
                                                    <br>
                                                    <br>
                                                        <button  type="submit" id="submitBtn" class="btn btn-dark mr-2">Registrar</button>
                                                        <a href="#" class="btn btn-dark" data-dismiss="modal">Cancelar</a>  
                                                    </div>
                                                
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- fin Modal EDITAR PROVEEDOR -->
                                {{-- fin modal editar --}}
                            <?php  $contador++;?>
                          @endforeach 
                        </tbody>
                      </table>
                      <br>
                      {{-- {{ $personas->links() }} --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>         
  </section>
    {{-- <!-- Modal CREAR PROVEEDOR -->
    <div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2"aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel-2">Informacion personal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><B>X</B></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="partition1" class="container">
                        <div class="row">
                            <form action="{{url('proveedores/store')}}" method="POST">
                                @csrf
                                <div class="col-lg-6"> 
                                    <label for="campo1">Nombre:</label>
                                    <input type="text" id="campo1" name="nombre" required><br>
                                    <label for="campo2">Celular:</label>
                                    <input type="number" id="campo2" name="celular" required><br>
                                    <label for="campo3">Celular:</label>
                                    <input type="number" id="campo3" name="celular_2"><br>
                                    <label for="campo4">Correo :</label>
                                    <input type="text" id="campo4" name="correo"><br>
                                </div>
                                <div class="col-lg-6">
                                    <label for="campo5">Numero NIT:</label>
                                    <input type="text" id="campo5" name="nit"><br>
                                    <label for="campo7">Direccion:</label>
                                    <input type="text" id="campo7" name="direccion"><br>
                                    <br>
                                    <div class="derecha">
                                    <button  type="submit" class="btn btn-dark mr-2">Registrar</button>
                                    <a href="#" class="btn btn-dark" data-dismiss="modal">Cancelar</a>  
                                    </div>
                                </div>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="ruta" value="{{url('/')}}">
        <!-- Modal CREAR PROVEEDOR -->






<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Datos del proveedor</h3>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="order-listing_wrapper"
                                class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="dataTables_length" id="order-listing_length">
                                            <form class="form-inline">
                                                <div>
                                                    <input class="form-control mr-sm-2 light-table-filter"
                                                        data-table="order-table" type="text"
                                                        placeholder="Busqueda por nombre"
                                                        onkeypress="return soloLetras(event)">
                                                    <a href="" class="btn btn-dark">
                                                        <i class="fas fa-undo-alt"></i>
                                                    </a>
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                        data-toggle="modal" data-target="#exampleModal-2"
                                                        fdprocessedid="4otim4">+ Agregar nuevo<i></i></button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <table id="products_listing" class="table order-table">
                                    <thead>
                                        <tr>
                                            <th class="text-center" scope="col">ID</th>
                                            <th class="text-center" scope="col">NOMBRE</th>
                                            <th class="text-center" scope="col">CELULAR</th>
                                            <th class="text-center" scope="col">TELEFONO</th>
                                            <th class="text-center" scope="col">COREEO</th>
                                            <th class="text-center" scope="col">DIRECCION</th>
                                            <th class="text-center" scope="col">NIT</th>
                                            <th class="text-center" scope="col">ACCIONES</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                        @foreach ($proveedores as $item)
                                        <tr>
                                            <td  class="text-center" scope="row"></td>
                                            <td class="text-center">{{$item->NOMBRE}}</td>
                                            <td class="text-center">{{$item->CELULAR}}</td>
                                            <td class="text-center">{{$item->CELULAR_2}}</td>
                                            <td class="text-center">{{$item->CORREO}}</td>
                                            <td class="text-center">{{$item->DIRECCION}}</td>
                                            <td class="text-center">{{$item->COD_PROVEEDOR}}</td>
                                            <td style="width: 20%;">
                                                <button class="btn btn-outline-info" type="button" data-toggle="modal" 
                                                    data-target="#editarProveedorModal{{$item->COD_PROVEEDOR}}">
                                                     <i class="far fa-edit"></i>
                                                </button>

                                                <a href="#" class="btn btn-outline-danger" data-toggle="modal"
                                                    data-target=""><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <!-- Modal EDITAR PROVEEDOR -->
                                        <div class="modal fade" id="editarProveedorModal{{$item->COD_PROVEEDOR}}" tabindex="-1" role="dialog" aria-labelledby="editarProveedorModal" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editarProveedorModalTitle">Editar proveedor</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true"><B>X</B></span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="infoPersonalForm" action="{{ url('proveedores/update', $item->COD_PROVEEDOR) }}" method="POST">
                                                            @method('PUT')
                                                            @csrf
                                                            <div id="division1">
                                                                <label for="campo1">Nombre:</label>
                                                                <input type="text" id="campo1" value="{{$item->NOMBRE}}" name="nombre" required><br>
                                                                <label for="campo2">Celular:</label>
                                                                <input type="number" id="campo2" value="{{$item->CELULAR}}" name="celular" required><br>
                                                                <label for="campo3">Celular:</label>
                                                                <input type="number" id="campo3" value="{{$item->CELULAR_2}}" name="celular_2"><br>
                                                                <label for="campo4">Correo :</label>
                                                                <input type="text" id="campo4" value="{{$item->CORREO}}" name="correo"><br>
                                                            </div>
                                                            <div id="division2">
                                                                    <label for="campo5">Numero NIT:</label>
                                                                    <input type="text" id="campo5" value="{{$item->NIT}}"  name="nit"><br>
                                                                    <label for="campo7">Direccion:</label>
                                                                    <input type="text" id="campo7" value="{{$item->DIRECCION}}"  name="direccion"><br>
                                                            </div>
                                                            <div class="derecha">
                                                            <br>
                                                            <br>
                                                                <button  type="submit" id="submitBtn" class="btn btn-dark mr-2">Registrar</button>
                                                                <a href="#" class="btn btn-dark" data-dismiss="modal">Cancelar</a>  
                                                            </div>
                                                        
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- fin Modal EDITAR PROVEEDOR -->
                                      
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


     --}}




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
    let clase = 'eliminarPersona';
    let mensaje = "De eliminar a este registro!";
    eliminarPorRuta(mensaje,clase);
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

    $(document).on("click", ".eliminarProveedor",function(){
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
      }).then((result) =>
        {
          if(result.isConfirmed)
          {
            let datos = new FormData();
            datos.append("_method", method);
            datos.append("_token", token);
            $.ajax
            ({
              url:action,
              method: "POST",
              data:datos,
              cache:false,
              contentType:false,
              processData:false,
              success: function(res)
              {
                if(res == "ok")
                {
                  Swal.fire({
                  type: 'success',
                  title: 'El registro ha sido eliminado.',
                  showConfirmButton: true,
                  confirmButtonText: 'Cerrar',
                  }).then((result) => {
                      if (result.isConfirmed) {
                        window.location = ruta+'/'+pagina;
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