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
                          <div class="col-lg-6"> 
                            <form action="{{url('proveedores/store')}}" method="POST">
                                @csrf

                                    <label for="campo1">Nombre:</label>
                                    <input type="text" id="campo1" name="nombre" required><br>

                                    <label for="campo2">Apellidos:</label>
                                    <input type="text" id="campo2" name="campo2"><br>

                                    <label for="campo4">Rason social:</label>
                                    <input type="text" id="campo4" name="campo4"><br>
                                  
                                    <label for="campo3">Numero CI /NIT:</label>
                                    <input type="text" id="campo3" name="nit"><br>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Numero CI
                                        </label>
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Numero NIT
                                        </label>
                                    </div>
                                    <label for="campo2">Celular:</label>
                                    <input type="text" id="campo2" name="celular" required><br>

                                    <label for="campo4">Correo electronico:</label>
                                    <input type="text" id="campo4" name="correo"><br>
                                </div>
                                <div class="col-lg-6">
                                    <label for="campo7">Direccion:</label>
                                    <input type="text" id="campo7" name="direccion"><br>

                                  <label for="campo8">Numero de cuenta:</label>
                                  <input type="text" id="campo8" name="campo8"><br>

                                  <label for="campo33">Pesona de contacto::</label>
                                  <input type="text" id="campo33" name="celular_2"><br>

                                  <label for="campo8">Numero celular:</label>
                                  <input type="text" id="campo8" name="campo8"><br>

                                  <label for="campo8">Observaciones</label>
                                  <input type="text" id="campo8" name="campo8"><br>
                                  <br>
                                  <br>
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
                    <div class="card">
                      <div class="card-body">
               

                        <div class="row">
                          <div class="col-sm-12">
                              <div class="dataTables_length" id="order-listing_length">
                                  <form class="form-inline">
                                      <div>
                                         
                                              <input class="form-control" id="buscar" name="buscar" type="text"  onkeypress="return soloLetras(event)" placeholder="Buscar por nombre,apellido....."/>
                                          <a href="" class="btn btn-dark"
                                          lass="input-group-text" id="basic-addon1">
                                          <i class="fa fa-search" aria-hidden="true"></i>
                                          </a>
                                          <a href="" type="button" class="btn btn-dark" onclick="window.location.href='{{ route('proveedores.index') }}'">
                                            <i class="fas fa-undo-alt"></i>
                                        </a>
                                          <button type="button" class="btn btn-primary btn-sm"
                                              data-toggle="modal" data-target="#exampleModal-2"
                                              fdprocessedid="4otim4"><i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i> <b> Agregar nuevo</b><i></i></button>
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
                                <th  class="text-center" style="color: #fff;">ID</th>
                                <th  class="text-center" style="color: #fff;">NOMBRE</th>
                                <th  class="text-center" style="color: #fff;">APELLIDOS</th>
                                <th  class="text-center" style="color: #fff;">CI/NIT</th>
                                <th  class="text-center" style="color: #fff;">DIRECCION</th>
                                <th  class="text-center" style="color: #fff;">P CONTACTO</th>
                                <th  class="text-center" style="color: #fff;">N CELULAR</th>
                                <th  class="text-center" style="color: #fff;">OBSERVACUONES</th>
                                <th  class="text-center" style="color: #fff;">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody id="data_persona">
                          <?php $contador = 1?>
                          @foreach ($proveedores as $item)
                            <tr>
                              <td  class="text-center" scope="row"><?php echo $contador;?></td>
                         
                              <td class="text-center">{{$item->NOMBRE}}</td>
                              <td class="text-center"></td>

                              <td class="text-center">{{$item->NIT}}</td>
                              <td class="text-center">{{$item->DIRECCION}}</td>
                              <td class="text-center"></td>
                              <td class="text-center">{{$item->CELULAR_2}}</td>
                              <td class="text-center"></td>
                              
                              <td class="text-center">     
                                <center>
                                <a class="btn btn-outline-info" href="#" title="Editar"
                                data-toggle="modal"   data-target="#editarProveedorModal{{$item->COD_PROVEEDOR}}">
                                    <i class="far fa-edit"></i></a>

                                <a href="#" class="btn btn-outline-danger eliminarProveedor" action="{{ url('proveedores/destroy',$item->COD_PROVEEDOR) }}"
                                  method="DELETE" token="{{ csrf_token() }}" pagina="proveedores"><i class="far fa-trash-alt"></i></a>
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
                                              <div id="partition1" class="container">
                                                  <div class="row">
                                                    <div class="col-lg-6"> 
                                                      <form action="{{ url('proveedores/update', $item->COD_PROVEEDOR) }}" method="POST">
                                                        @method('PUT')
                                                            @csrf
                          
                                                              <label for="campo1">Nombre:</label>
                                                              <input type="text" value="{{$item->NOMBRE}}" id="campo1" name="nombre" required><br>
                          
                                                              <label for="campo2">Apellidos:</label>
                                                              <input type="text" id="campo2" name="campo2"><br>
                          
                                                              <label for="campo4">Rason social:</label>
                                                              <input type="text" id="campo4" name="campo4"><br>
                                                            
                                                              <label for="campo3">Numero CI /NIT:</label>
                                                              <input type="text" id="campo3" value="{{$item->NIT}}" name="nit"><br>
                          
                                                              <div class="form-check">
                                                                  <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                                      id="flexRadioDefault1">
                                                                  <label class="form-check-label" for="flexRadioDefault1">
                                                                      Numero CI
                                                                  </label>
                                                                  <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                                      id="flexRadioDefault2" checked>
                                                                  <label class="form-check-label" for="flexRadioDefault2">
                                                                      Numero NIT
                                                                  </label>
                                                              </div>
                                                              <label for="campo2">Celular:</label>
                                                              <input type="text" value="{{$item->CELULAR}}" id="campo2" name="celular" required><br>
                          
                                                              <label for="campo4">Correo electronico:</label>
                                                              <input type="text" id="campo4" value="{{$item->CORREO}}" name="correo"><br>
                                                          </div>
                                                          <div class="col-lg-6">
                                                              <label for="campo7">Direccion:</label>
                                                              <input type="text" id="campo7" value="{{$item->DIRECCION}}" name="direccion"><br>
                          
                                                            <label for="campo8">Numero de cuenta:</label>
                                                            <input type="text" id="campo8" name="campo8"><br>
                          
                                                            <label for="campo33">Pesona de contacto::</label>
                                                            <input type="text" id="campo33"  name="celular_2"><br>
                          
                                                            <label for="campo88">Numero celular:</label>
                                                            <input type="text" id="campo88" value="{{$item->CELULAR_2}}" name="celular_2"><br>
                          
                                                            <label for="campo8">Observaciones</label>
                                                            <input type="text" id="campo8" name="campo8"><br>
                                                            <br>
                                                            <br>
                                                            <br>
                                                            <div class="derecha">
                                                              <button  type="submit" id="submitBtn" class="btn btn-dark mr-2">Actualizar</button>
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
                      <div class="row">  
                        <div class="col-lg-12">
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>         
  </section>




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


