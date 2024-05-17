@extends('admin.principal')
@section('contenido')
<style>

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        line-height: normal !important; 
    }

    table
    {
        font-size: 14px;
    }

    th, td 
    {
        padding: 8px;
    }

    tfoot th
    {
        padding-top: 12px;
        font-weight: bold;
    }

    #table th 
    {
        width: 20%; /* Puedes ajustar este valor según tus necesidades */
    }

</style>

  <div class="main-panel">          
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Crear orden de compra </h3>
        
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="card">
                <div class="card-body">
                    <form action="{{ route('ordeDeCompra.store') }}" method="POST" class="form-horizontal">
                        @csrf
                        <input type="text" name="id"  value="" hidden>
                        <div class="row ">
                          <div class="col-md-4">
                            <div class="form-group">
                                <label for="nombre">Proveedor<span class="required"></span></label>
                                <select name="proveedor_id" class="form-control selectric">    
                                    @foreach($proveedores as $item)
                                        <option value="{{$item->COD_PROVEEDOR}}">{{$item->NOMBRE}}</option>
                                    @endforeach
                                </select>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <label for="campo8">sucursal:</label>
                            <select name="sucursal_id" class="form-control selectric">
                                @foreach($sucursales as $item)
                                    <option value="{{$item->COD_SUCURSAL}}">{{$item->NOMBRE_SURCUSAL}}</option>
                                @endforeach
                            </select>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                                <label for="nombre">N. Factura<span class="required"></span></label>
                                <input type="number" min="0"   class="form-control" id="factura" name="factura"   required>
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
                                <label for="nombre">Fecha<span class="required"></span></label>
                                <input  type="date"   class="form-control" id="fecha" name="fecha" required>
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nombre">Descripcion<span class="required"></span></label>
                                    <input type="text" onkeypress="return soloLetras(event)" class="form-control" id="descripcion" name="descripcion"   required>
                                </div>
                            </div> 
                        </div>  
                        <hr>                 
                        <div class="row ">
                          <div class="col-md-3">
                            <div class="form-group">
                                <label for="nombre">Items<span class="required"></span></label>
                                <select name="pedido_id" class="selectric" id="producto"> 
                                    <option value="_">Seleccione Items</option         
                                    @foreach($productos as $item)
                                        <option value="{{$item->COD_ITEM}}">{{$item->CODIGO_ITEM}}  {{$item->NOMBRE}}</option>
                                    @endforeach
                                </select>
                            </div>
                          </div>
                          <div class="col-md-2">
                            <label for="nombre">Precio compra<span class="required"></span></label>
                            <div class="form-group">
                                <input type="number" onkeypress="return soloNumeros(event)" inputmode="numeric" class="form-control" id="precio" name="stock" required>
                            </div>
                          </div>
                          <div class="col-md-2">
                            <label for="nombre">Cantidad<span class="required"></span></label>
                            <div class="form-group">
                              <input type="number" onkeypress="return soloNumeros(event)" min="0"  class="form-control" id="cantidad"   required>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <label for="nombre">.<span class="required"></span></label>
                            <div class="form-group">
                                <button type="button" style=" color: white; font-weight: bold;" class="btn btn-primary" id="agregar">
                                  Agregar producto  <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                </button>
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="table">
                                    <thead class="bg-info">
                                        <tr>
                                            <th class="text-center" style="color: #fff; width: 20px;" scope="col">CANTIDAD</th>
                                            <th class="text-center" style="color: #fff;" scope="col">PRODUCTO</th>
                                            <th class="text-center" style="color: #fff; width: 80px;" scope="col">PRECIO U.</th>
                                            <th class="text-center" style="color: #fff;" scope="col">SUBTOTAL</th>
                                            <th class="text-center" style="color: #fff;" scope="col">OPCIONES</th>
                                        </tr>
                                    </thead>
                                    <tbody id="data_compra">
                                        <!-- Aquí irán los datos de la tabla Ovio si es mi codigo que copiaste -->
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th class="text-center" style="color: black" scope="col">TOTAL</th>
                                            <th class="text-center" scope="col"></th>
                                            <th class="text-center" scope="col"></th>
                                            <th class="text-center" scope="col"><h5 style="color: black" id="total">Bs/ 0.00</h5></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-12" id="guardar">
                            <button type="submit" class="btn btn-dark mr-2">Registrar</button>
                            <a href="" class="btn btn-dark mr-2"> Cancelar</a>
                        </div>
                      </form>
                 
                <div class="row">  
            <div class="col-lg-12">
        </div>
    </div> 
@endsection

@section('script')  
    <script>
        $(document).ready(function(){ 
            $("#agregar").click(function(){
                agregarItemsCompra();
            });

            $('.selectric').select2({ 
                width: '100%',
            });    
        });
        var contador = 0;          
        var total = 0;
        var subtotal = [];
        function agregarItemsCompra()
        {
            let datosProducto = document.getElementById("producto").value.split('_');
            let precio1 =  document.getElementById("precio");
            let cantidad2 = document.getElementById("cantidad");
            let cantidad = $("#cantidad").val();
            let precio = $("#precio").val();
            let producto = $("#producto option:selected").text();
            let producto_id = datosProducto[0];
            if( producto  != "" && precio > 0 && cantidad > 0)
            {
                subtotal[contador]=(cantidad*precio);
                total = total+subtotal[contador];
                let fila = `<tr class="selected" id="fila${contador}">
                      <td class="text-center"><input type="hidden"   name="cantidad[]" value="${cantidad}">${cantidad}</td>
                      <td class="text-center"><input  class="form-control text-center" type="hidden" name="idproducto[]" value="${producto_id}">${producto}</td>
                      <td class="text-center"><input type="hidden"   name="precio[]" value="${precio}">${precio}</td>
                      <td class="text-center"><input type="hidden""   name="subtotal[]" value="${subtotal[contador]}">${subtotal[contador]}</td>
                      <td class="text-center"><button class="btn btn-danger btn-sm mx-2" onclick="eliminar(${contador})">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                          </button>
                      </td>
                    </tr>`;
        contador++;
        $("#total").html("" + total + " Bs");
        evaluar();
        $("#table").append(fila);
      }else{
        Swal.fire({
            icon: 'error',
            title: 'Ingrese una cantidad o un precio',
            text: 'Ingresar una cantidad los campos no puede ser 0!',
          })
       
      }
    }
    function evaluar(){
       if(total > 0){
         $("#guardar").show();
       }else{
        $("#guardar").hide();
       }
     }
     function eliminar(index){
       total = total-subtotal[index];
       $("#total").html("" + total);
       $("#fila" + index).remove();
       evaluar();
     }
evaluar();
       
    </script>
@endsection
