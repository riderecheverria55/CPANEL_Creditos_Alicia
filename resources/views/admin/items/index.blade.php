@extends('admin.principal')
@section('contenido')




    <!-- Modal CREAR itens -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel-2">Agregar items</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><B>X</B></span>
                    </button>
                </div>
 
                <div class="modal-body">
                    <div id="partition1" class="container">
                        <div class="row">
                            <div class="col-lg-6"> 
                            <form action="{{url('items/store')}}" method="POST">
                                @csrf
                                <!-- Primera partición -->
                                
                                    <label for="campo8">Seleccionar categoria:</label>
                                    <select name="cod_categoria" class="form-control selectric select2" id="select2">
                                        @foreach($categorias as $item)
                                        <option value="{{$item->COD_CATEGORIA}}">{{$item->NOMBRE_CATEGORIA}}</option>
                                        @endforeach
                                    </select>
                                    <br>
                                    <label for="campo8">Descripcion</label>
                                    <input type="text" id="campo8" name="nombre"><br>

                                    <label for="campo8">Codigo de fabrica:</label>
                                    <input type="text" id="campo8" name="numero_serie"><br>
                                </div>
                                <!-- Segunda partición -->
                                <div class="col-lg-6">
                                    <label for="campo8">Seleccionar subcategoria:</label>
                                    <select name="cod_subcategoria" class="form-control selectric select2" id="select2">
                                        @foreach($subcategorias as $item)
                                            <option value="{{$item->COD_SUB_CATEGORIA}}">{{$item->NOMBRE_SUB}}</option>
                                        @endforeach
                                    </select>
                                    <br>
                                    <label for="campo8">Seleccionar unidad de medida:</label>
                                    <select name="cod_medida" class="form-control selectric select2" id="select2">
                                        @foreach($medidas as $item)
                                            <option value="{{$item->COD_MEDIDA}}">{{$item->NOMBRE_MEDIDA}}</option>
                                        @endforeach
                                    </select>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="derecha">
                                        <button type="submit" class="btn btn-dark mr-2">Registrar</button>
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
 <!-- Modal CREAR itens --> 
    <input type="hidden" id="ruta" value="{{url('/')}}">



    <div class="main-panel">          
        <div class="content-wrapper">
          <div class="page-header">
          <h3 class="page-title">
                  Crear roles
                </h3>
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
                                                        <a href="" type="button" class="btn btn-dark" onclick="window.location.href='{{ route('items.index') }}'">
                                                          <i class="fas fa-undo-alt"></i>
                                                      </a>
                                                        <button type="button" class="btn btn-primary btn-sm"
                                                            data-toggle="modal" data-target="#exampleModal"
                                                            fdprocessedid="4otim4"><i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i> <b> Agregar nuevo</b><i></i></button>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                  
                               <br>
                    
                                      <div class="card-block table-border-style">
                                        <div class="table-responsive">
                                          <table class="table table-bordered  table-hover" id="table">
                                            <thead class="bg-primary">
                                                <tr>
                                                    <th style="color: #fff;" class="text-center" scope="col">ID</th>
                                                    <th style="color: #fff;" class="text-center" scope="col">NOMBRE</th>
                                                    <th style="color: #fff;" class="text-center" scope="col">CATEGORIA</th>
                                                    <th style="color: #fff;" class="text-center" scope="col">SUBCATEGORIA</th>
                                                    <th style="color: #fff;" class="text-center" scope="col">CODIGO</th>
                                                    <th style="color: #fff;" class="text-center" scope="col">MEDIDA</th>
                                                    <th style="color: #fff;" class="text-center" scope="col">CODIGO FABRI.</th>
                                                    <th style="color: #fff;" class="text-center" scope="col">ACCIONES</th>
                                                </tr>
                                            </thead>
                                            <tbody id="data_persona">
                                              <?php $contador = 1?>
                                              @foreach ($productos as $item)
                                                <tr>
                                                    <td  class="text-center" scope="row"><?php echo $contador;?></td>
                                                    <td class="text-center">{{$item->NOMBRE}}</td>
                                                    <td class="text-center">{{$item->NOMBRE_CATEGORIA}}</td>
                                                    <td class="text-center">{{$item->NOMBRE_SUB}}</td>
                                                    <td class="text-center">{{$item->CODIGO_ITEM}}</td>
                                                    <td class="text-center">{{$item->NOMBRE_MEDIDA}}</td>
                                                    <td class="text-center">{{$item->NUMERO_SERIE}}</td>
                                                    <td class="text-center">     
                                                        <center>




                                                        <a class="btn btn-outline-info" href="#" title="Editar"
                                data-toggle="modal"   data-target="#editModalPro{{$item->COD_ITEM}}">
                                    <i class="far fa-edit"></i></a>

                                <a href="#" class="btn btn-outline-danger eliminarItems"  action="{{ url('items/destroy',$item->COD_ITEM) }}"
                                    method="DELETE" token="{{ csrf_token() }}" pagina="items"><i class="far fa-trash-alt"></i></a>
                                                        </center>
                                                    </td>
                                                </tr>
        

                            <!-- Modal EDITAR SUCURSAL -->

                            <div class="modal fade" id="editModalPro{{$item->COD_ITEM}}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-md" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel">Editar Items</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true"><b>X</b></span>
                                            </button>
                                        </div>
                     
                                    <div class="modal-body">
                                        <div id="partition1" class="container">
                                            <div class="row">
                                                <div class="col-lg-6"> 
                                                    <form action="{{url('items/update', $item->COD_ITEM)}}" method="POST">
                                                    
                                                        @method('PUT')
                                                        @csrf
                                                        <label for="campo8">Seleccionar categoria:</label>
                                                        <select class="form-control" id="categoria" name="cod_categoria">
                                                            @foreach($categorias as $categoria)
                                                                @if($categoria->COD_CATEGORIA == $item->COD_CATEGORIA)
                                                                    <option value="{{$categoria->COD_CATEGORIA}}" selected>{{ $categoria->NOMBRE_CATEGORIA }}</option>
                                                                @else
                                                                    <option value="{{$categoria->COD_CATEGORIA}}">{{ $categoria->NOMBRE_CATEGORIA }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                        <br>
                                                        <label for="campo8">Descripcion</label>
                                                        <input type="text" id="campo8" value="{{$item->NOMBRE}}" name="nombre"><br>
                                                </div>
                                                <div class="col-lg-6"> 
                                                    <label for="campo8">Seleccionar subcategoria:</label>
                                                    <select name="cod_subcategoria" class="form-control selectric select2" >
                                                        @foreach($subcategorias as $subcategoria)
                                                                @if($subcategoria->COD_SUB_CATEGORIA == $item->COD_SUB_CAT)
                                                                    <option value="{{ $subcategoria->COD_SUB_CATEGORIA }}" selected>{{ $subcategoria->NOMBRE_SUB}}</option>
                                                                @else
                                                                    <option value="{{ $subcategoria->COD_SUB_CATEGORIA }}">{{ $subcategoria->NOMBRE_SUB}}</option>
                                                                @endif
                                                            @endforeach
                                                    </select>
                                                    <br>
                                                    <label for="campo8">Codigo de fabrica:</label>
                                                    <input type="text" value="{{$item->NUMERO_SERIE}}" id="campo8" name="numero_serie"><br>
                                                    <label for="campo8">Seleccionar unidad de medida:</label>
                                                    <select name="cod_medida" class="form-control selectric select2" >
                                                        @foreach($medidas as $medida)
                                                                @if($medida->COD_MEDIDA == $item->COD_MEDIDA)
                                                                    <option value="{{ $medida->COD_MEDIDA }}" selected>{{ $medida->NOMBRE_MEDIDA}}</option>
                                                                @else
                                                                    <option value="{{ $medida->COD_MEDIDA }}">{{ $medida->NOMBRE_MEDIDA}}</option>
                                                                @endif
                                                            @endforeach
                                                        
                                                    </select>
                                                    <div class="derecha">
                                                        <br>
                                                        <br>
                                                        <button type="submit" class="btn btn-dark mr-2">Actualizar</button>
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
    eliminarPorRuta(mensaje,clase);
  </script>
   <script type="text/javascript">

    $(document).on("click", ".eliminarItems",function(){
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