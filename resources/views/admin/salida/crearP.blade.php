@extends('admin.principal')
@section('contenido')
<style>
    /* Estilos adicionales para hacer la tabla más legible en dispositivos móviles */
    table {
        font-size: 14px;
    }

    th, td {
        padding: 8px;
    }

    /* Estilos para el pie de página */
    tfoot th {
        padding-top: 12px;
        font-weight: bold;
    }
    #table th {
    width: 20%; /* Puedes ajustar este valor según tus necesidades */
}
</style>
    <div class="main-panel">          
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Crear salida</h3>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('salida.store') }}" method="POST" " class="form-horizontal">
                                        @csrf
                                        <input type="text" name="id"  value="" hidden >
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label for="campo8">Salida sucursal:</label>
                                                <select name="sucursal_id" class="form-control selectIngresoInicial" required>
                                                @foreach($sucursales as $item)
                                                    <option value="{{$item->COD_SUCURSAL}}">{{$item->NOMBRE_SURCUSAL}}</option>
                                                @endforeach
                                                </select>
                                                <div class="form-group">
                                                    <br>
                                                    <label for="nombre">Fecha<span class="required"></span></label>
                                                    <input  type="date"   class="form-control" id="fecha" name="fecha" required>
                                                </div>
                                            </div> 
                                            <div class="col-md-2">
                                                <label for="campo8">Ingreso sucursal:</label>
                                                <select name="sucursal_id_ingreso" class="form-control selectIngresoInicial" required>
                                                @foreach($sucursales as $item)
                                                    <option value="{{$item->COD_SUCURSAL}}">{{$item->NOMBRE_SURCUSAL}}</option>
                                                @endforeach
                                                </select>
                                                <div class="form-group">
                                                    <br>
                                                    <label for="campo8">Encargado  sucursal:</label>
                                                    <select name="encargado_id" class="form-control selectIngresoInicial" id="encargado_id" required> 
                                                    <option value="_">Seleccione Chofer</option>         
                                                    @foreach($empleados as $item)
                                                        <option value="{{$item->COD_EMPLEADO}}">{{$item->NOMBRE}} {{$item->APELLIDO}}</option>
                                                    @endforeach
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label for="campo8">tipo de salida:</label>
                                                <select name="tipo_salida" class="form-control" required>
                                                <option value="2">BAJA</option>
                                                <option value="1">TRANSPASO</option>             
                                                </select>
                                                <div class="form-group">
                                                    <br>
                                                    <label for="campo8">Chofer:</label>
                                                    <select name="chofer_id" class="form-control selectIngresoInicial" id="chofer_id"> 
                                                    <option value="_">Seleccione Chofer</option>         
                                                    @foreach($empleados as $item)
                                                        <option value="{{$item->COD_EMPLEADO}}">{{$item->NOMBRE}} {{$item->APELLIDO}}</option>
                                                    @endforeach
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="nombre">Nota:<span class="required"></span></label>
                                                    <input type="text" onkeypress="return soloLetras(event)" class="form-control" id="observeciones" name="observeciones" >
                                                </div>
                                            </div>         
                                        </div>
                                        <hr>                 
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="nombre">Productos/Itens<span class="required"></span></label>
                                                    <select name="pedido_id" class="form-control selectIngresoInicial" id="producto"> 
                                                    <option value="_">Seleccione Items</option         
                                                    @foreach($productos as $item)
                                                        <option value="{{$item->COD_ITEM}}">{{$item->CODIGO_ITEM}}  {{$item->NOMBRE}}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label for="nombre">Cantidad<span class="required"></span></label>
                                                <div class="form-group">
                                                <input type="number"  min="0"  class="form-control" id="cantidad"   required>
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
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive"> 
                                                    <table class="table table-bordered table-hover" id="table_ingreso">
                                                        <thead class="bg-primary">
                                                              <tr>  
                                                                  <th class="text-center" style="color: #fff;" scope="col">PRODUCTO</th>
                                                                  <th class="text-center" style="color: #fff; " scope="col">CANTIDAD</th>
                                                                  <th class="text-center" style="color: #fff;" scope="col">OPCIONES</th>
                                                              </tr>
                                                        </thead>
                                                        <tbody id="data_persona">
                                                            
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th class="text-center" style="color: black" scope="col">TOTAL</th>
                                                                <th class="text-center" scope="col"><h5 style="color: black" id="total">Bs/ 0.00</h5></th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="col-md-12" id="guardar">
                                            <button type="submit" class="btn btn-dark mr-2">Registrar</button>
                                            <a href="" class="btn btn-dark mr-2"> Cancelar</a>
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
@endsection
@section('script')  
    <script>
        $(document).ready(function(){
            $("#agregar").click(function(){
                agregarItemsCompra();
            }); 
            $('.selectIngresoInicial').select2({ 
                width: '100%',
            });    
        });

        var contador = 0;          
        var total = 0;
        var cantidades = [];

        function agregarItemsCompra()
        {
            let datosProducto = document.getElementById("producto").value.split('_');
            let cantidad = parseInt($("#cantidad").val());
            let producto = $("#producto option:selected").text();
            let producto_id = datosProducto[0];

            if(producto != "" && cantidad > 0)
            {
                cantidades[contador] = cantidad;
                total += cantidad;

                let fila = `<tr class="selected" id="fila${contador}">
                      
                      <td class="text-center"><input class="form-control text-center" type="hidden" name="idproducto[]" value="${producto_id}">${producto}</td>
                      <td class="text-center"><input type="hidden" name="cantidad[]" value="${cantidad}">${cantidad}</td>
                      <td class="text-center"><button class="btn btn-danger btn-sm mx-2" onclick="eliminar(${contador})">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                          </button>
                      </td>
                    </tr>`;
                contador++;
                $("#total").html(" "+ total+ "" );
                evaluar();
                $("#table_ingreso").append(fila);
            }
            else
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Ingrese una cantidad',
                    text: 'Ingresar una cantidad, los campos no pueden ser 0!',
                });
            }
        }

        function evaluar()
        {
            if(total > 0){
                $("#guardar").show();
            }else{
                $("#guardar").hide();
            }
        }

        function eliminar(index)
        {
            total -= cantidades[index];
            $("#total").html("" + total + " Bs");
            $("#fila" + index).remove();
            evaluar();
        }

        evaluar();
    </script>
@endsection
