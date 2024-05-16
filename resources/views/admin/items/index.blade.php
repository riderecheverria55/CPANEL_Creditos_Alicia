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
                            <form action="{{url('items/store')}}" method="POST">
                                @csrf
                                <!-- Primera partición -->
                                <div class="col-lg-6"> 
                                    <label for="campo8">Seleccionar categoria:</label>
                                    <select name="cod_categoria" class="form-control selectric select2" id="select2">
                                        @foreach($categorias as $item)
                                        <option value="{{$item->COD_CATEGORIA}}">{{$item->NOMBRE_CATEGORIA}}</option>
                                        @endforeach
                                    </select>
                                    <label for="campo8">Descripcion</label>
                                    <input type="text" id="campo8" name="nombre"><br>
                                </div>
                                <!-- Segunda partición -->
                                <div class="col-lg-6">
                                    <label for="campo8">Seleccionar subcategoria:</label>
                                    <select name="cod_subcategoria" class="form-control selectric select2" id="select2">
                                        @foreach($subcategorias as $item)
                                            <option value="{{$item->COD_SUB_CATEGORIA}}">{{$item->NOMBRE_SUB}}</option>
                                        @endforeach
                                    </select>
                                    <label for="campo8">Codigo de fabrica:</label>
                                    <input type="text" id="campo8" name="numero_serie"><br>
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
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="page-header card">
              <div class="card-block">
                @if (session('status'))
                    <div class="alert alert-success">{{session('status') }}</div>
                @endif
                <div class="card-body">
                  <form action="{{route('items.index')}}" method="GET" class="form_date" id="formulario">
                    <div class="row">
                      <div class="input-group col-4">
                          <input class="form-control" id="buscar" name="buscar" type="text"  onkeypress="return soloLetras(event)" placeholder="Buscar "/>
                          <div class="input-group-prepend">
                            <button type="submit">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-search" aria-hidden="true"></i></span>
                            </button>
                          </div>
                          <button type="button" style="float: right; color: white; font-weight: bold;margin-left: 5px;padding-left: 16px;
                              padding-right: 16px; " class="btn btn-success"
                              onclick="window.location.href='{{ route('items.index') }}'">
                              <i class="fa fa-refresh" aria-hidden="true"></i>
                          </button>
                      </div>
                      <div class="form-group col-8">      
                        <button type="button" style="float: right; color: white; font-weight: bold;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                          Registrar Items<i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
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
                                <th class="text-center" scope="col">CATEGORIA</th>
                                <th class="text-center" scope="col">SUBCATEGORIA</th>
                                <th class="text-center" scope="col">CODIGO</th>
                                <th class="text-center" scope="col">MEDIDA</th>
                                <th class="text-center" scope="col">CODIGO FABRI.</th>
                                <th class="text-center" scope="col">ACCIONES</th>
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
                                    <button type="button" " class="btn btn-warning btn-sm mx-2" data-toggle="modal"
                                    data-target="#editModalPro{{$item->COD_ITEM}}"><i class="fa fa-pencil" aria-hidden="true"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm mx-2 eliminarItems" action="{{ url('items/destroy',$item->COD_ITEM) }}"
                                        method="DELETE" token="{{ csrf_token() }}" pagina="items">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
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
                                            <form action="{{url('items/update', $item->COD_ITEM)}}" method="POST">
                                                <div id="editDivision">
                                                
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
                                                    <br>
                                                    <br>
                                                    <br>
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









{{-- <div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Datos de itens</h3>
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
                                                        fdprocessedid="4otim4"><b>+</b> Agregar
                                                        itens<i></i></button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <table id="products_listing" class="table order-table">
                                    <thead>
                                        <tr>
                                            <th class="text-center" scope="col">ID</th>
                                            <th class="text-center" scope="col">NOMBRE</th>
                                            <th class="text-center" scope="col">CATEGORIA</th>
                                            <th class="text-center" scope="col">SUBCATEGORIA</th>
                                            <th class="text-center" scope="col">CODIGO</th>
                                            <th class="text-center" scope="col">MEDIDA</th>
                                            <th class="text-center" scope="col">CODIGO FABRI.</th>
                                            <th class="text-center" scope="col">ACCIONES</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach ($productos as $item)
                                          <tr>
                                            <td  class="text-center" scope="row"></td>
                                       
                                            <td class="text-center">{{$item->NOMBRE}}</td>
                                            <td class="text-center">{{$item->NOMBRE_CATEGORIA}}</td>
                                            <td class="text-center">{{$item->NOMBRE_SUB}}</td>
                                            <td class="text-center">{{$item->CODIGO_ITEM}}</td>
                                            <td class="text-center">{{$item->NOMBRE_MEDIDA}}</td>
                                            <td class="text-center">{{$item->NUMERO_SERIE}}</td>
                                            
                                            <td class="text-center">     
                                              <center>
                                                <button type="button" " class="btn btn-warning btn-sm mx-2" data-toggle="modal"
                                                data-target="#editModalPro{{$item->COD_ITEM}}"><i class="fa fa-pencil" aria-hidden="true"></i>
                                                </button>
                                                {{-- <button class="btn btn-danger btn-sm mx-2 eliminarProveedor" action="{{ url('proveedores/destroy',$item->COD_PROVEEDOR) }}"
                                                  method="DELETE" token="{{ csrf_token() }}" pagina="proveedores">
                                                  <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button> --}}
                                              {{-- </center>
                                            </td>
                                          </tr> --}}
                                          {{-- <!-- Modal EDITAR SUCURSAL -->
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
                                                            <!-- Similar content as the original modal, adjusted for editing -->
                                                            <div id="editDivision">
                                                                <form action="{{url('items/update', $item->COD_ITEM)}}" method="POST">
                                                                    @method('PUT')
                                                                    @csrf
                                                                    <label for="campo8">Seleccionar categoria:</label>
                                                                    <select class="form-control" id="categoria" name="categoria">
                                                                        @foreach($categorias as $categoria)
                                                                            @if($categoria->COD_CATEGORIA == $item->COD_CATEGORIA)
                                                                                <option value="{{ $categoria->COD_CATEGORIA }}" selected>{{ $categoria->NOMBRE_CATEGORIA }}</option>
                                                                            @else
                                                                                <option value="{{ $categoria->COD_CATEGORIA }}">{{ $categoria->NOMBRE_CATEGORIA }}</option>
                                                                            @endif
                                                                        @endforeach
                                                                    </select>
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
                                                                <br>
                                                                <br>
                                                                <br>
                                                            </div>
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
                                        <!-- FIN Modal EDITAR SUCURSAL --> --}}

                                              {{--modal editar  --}}
                          {{-- <div class="modal fade" id="editModalPro{{$item->COD_ITEM}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header modal-header-warning">
                                  <h4 class="modal-title" id="exampleModalLabel">Editar producto</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <form action="{{url('items/update', $item->COD_ITEM)}}" method="POST">
                                  @method('PUT')
                                  @csrf
                                  <div class="modal-body">
                                    <div class="row">
                                      <div class="form-group col-8"> 
                                        <label for="nombre">Nombre</label>
                                        <input value="{{$item->COD_ITEM}}" onkeypress="return soloLetras(event)" type="text" class="form-control" id="nombre" name="nombre"  required>
                                      </div>
                                      <div class="form-group col-4"> 
                                        <label for="nombre">Marca</label>
                                          
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="form-group col-6"> 
                                        <label for="categoria_id">Seleccione la categoria<span class="required">*</span></label>
                                        
                                      </div>
                                      <div class="form-group col-6"> 
                                        <label for="presentacion_id">Seleccione la presentación<span class="required">*</span></label>
                                       
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-warning">Editar</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                          {{-- fin modal --}}

                                       
{{--                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  --}}
    <!-- Modal EDITAR itens -->
    {{-- <div class="modal fade" id="editaritensModal" tabindex="-1" role="dialog" aria-labelledby="editaritensModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editaritensModalTitle">Editar itens</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><B>X</B></span>
                    </button>
                </div>
                <div class="modal-body">

                    <!-- División 1 -->
                    <div id="division1">
                        <form id="infoPersonalForm">
                            <label for="campo8">Seleccionar categoria:</label>
                            <select>
                                <option>Tecnologia</option>
                                <option>Linea blanca</option>
                                <option>Motosicletas</option>
                            </select>
                            <label for="campo4">Codigo:</label>
                            <input type="text" id="campo4" name="campo4"><br>

                            <label for="campo8">Descripcion</label>
                            <input type="text" id="campo8" name="campo8"><br>
                        </form>
                    </div>

                    <!-- División 2 -->
                    <div id="division2">
                        <form id="infoContactoForm">
                            <label for="campo8">Seleccionar subcategoria:</label>
                            <select>
                                <option>Motos urbanas</option>
                                <option>Motos para trabajo</option>
                                <option>Motos para distancias largas</option>
                                <option>Motos para el campo</option>
                                <option>Motos para correr</option>
                            </select>

                            <label for="campo8">Codigo de fabrica:</label>
                            <input type="text" id="campo8" name="campo8"><br>

                            <label for="campo8">Seleccionar unidad de medida:</label>
                            <select>
                                <option>1 unidad</option>
                                <option>2 unidad</option>
                                <option>3 unidad</option>
                            </select>
                        </form>
                    </div>
                    <div class="derecha">
                        <br>
                        <br>
                        <button onclick="qr()" class="btn btn-dark mr-2">Registrar</button>
                        <a href="#" class="btn btn-dark" data-dismiss="modal">Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- fin Modal EDITAR itens-->





 <!-- Modal CREAR SUCURSAL -->
 {{-- <div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-3"
 aria-hidden="true">
 <div class="modal-dialog modal-md" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel-3">Agregar items</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true"><b>X</b></span>
             </button>
         </div>
         <div class="modal-body"> --}}
             <!-- División 2 -->
             {{-- <div id="division3">
                 <form action="{{url('items/store')}}" method="POST">
                     @csrf
                     <label for="campo8">Seleccionar categoria:</label>
                     <select name="cod_categoria" class="form-control selectric select2" id="select2">
                         @foreach($categorias as $item)
                           <option value="{{$item->COD_CATEGORIA}}">{{$item->NOMBRE_CATEGORIA}}</option>
                         @endforeach
                     </select>
                     <label for="campo8">Descripcion</label>
                     <input type="text" id="campo8" name="nombre"><br>
                 
             </div> --}}
             <!-- Segunda partición -->
             {{-- <div class="col-lg-6">
                     <label for="campo8">Seleccionar subcategoria:</label>
                     <select name="cod_subcategoria" class="form-control selectric select2" id="select2">
                         @foreach($subcategorias as $item)
                           <option value="{{$item->COD_SUB_CATEGORIA}}">{{$item->NOMBRE_SUB}}</option>
                         @endforeach
                     </select>
                     <label for="campo8">Codigo de fabrica:</label>
                     <input type="text" id="campo8" name="numero_serie"><br>
                     <label for="campo8">Seleccionar unidad de medida:</label>
                     <select name="cod_medida" class="form-control selectric select2" id="select2">
                         @foreach($medidas as $item)
                           <option value="{{$item->COD_MEDIDA}}">{{$item->NOMBRE_MEDIDA}}</option>
                         @endforeach
                     </select>
                     <br>
                     <br>
                     <br>
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
 </div> --}}
    {{-- <!-- Modal CREAR itens -->
    <div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2"
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
                            <!-- Primera partición -->
                            <div class="col-lg-6">
                                <form action="{{url('items/index')}}" method="POST">
                                    @csrf
                                    <label for="campo8">Seleccionar categoria:</label>
                                    <select name="cod_categoria" class="form-control selectric select2" id="select2">
                                        @foreach($categorias as $item)
                                          <option value="{{$item->COD_CATEGORIA}}">{{$item->NOMBRE_CATEGORIA}}</option>
                                        @endforeach
                                    </select>
                                    <label for="campo8">Descripcion</label>
                                    <input type="text" id="campo8" name="nombre"><br>
                                
                            </div>
                            <!-- Segunda partición -->
                            <div class="col-lg-6">
                                    <label for="campo8">Seleccionar subcategoria:</label>
                                    <select name="cod_subcategoria" class="form-control selectric select2" id="select2">
                                        @foreach($subcategorias as $item)
                                          <option value="{{$item->COD_SUB_CATEGORIA}}">{{$item->NOMBRE_SUB}}</option>
                                        @endforeach
                                    </select>
                                    <label for="campo8">Codigo de fabrica:</label>
                                    <input type="text" id="campo8" name="numero_serie"><br>
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
                                </form>
                            </div>
                        </div> --}}
                        <!-- Modal CREAR itens --> 
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