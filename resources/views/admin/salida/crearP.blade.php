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
      <h3 class="page-title">
              Crear salida
            </h3>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="card">
                <div class="card-body">
                    <form action="" method="POST" class="form-horizontal">
                  
                        <input type="text" name="id"  value="" hidden >
                        <div class="row ">
                          <div class="col-md-2">
                            <div class="form-group">
                                <label for="nombre">Numero salida<span class="required"></span></label>
                                <input type="number" min="0"   class="form-control" id="ingreso" name="ingreso"   required>
                                <br>
                                <label for="nombre">N. Factura<span class="required"></span></label>
                                <div class="input-group">
                                  <input type="number" min="0"   class="form-control" id="factura" name="factura"   required>
                                </div>


                            </div>
                          </div>
                          <div class="col-md-2">
                            <label for="campo8">Salida sucursal:</label>
                            <select>
                            <option>Sucursal 1</option>
                            <option>Sucursal 2</option>
                            <option>Sucursal 3</option>
                            </select>
                            <div class="form-group">
                                <br>
                                <label for="nombre">Fecha<span class="required"></span></label>
                                <input  type="date"   class="form-control" id="fecha" name="fecha" required>
                            </div>
                          </div> 
                          <div class="col-md-2">
                            <label for="campo8">Ingreso sucursal:</label>
                            <select>
                              <option>Sucursal 1</option>
                              <option>Sucursal 2</option>
                              <option>Sucursal 3</option>
                            </select>
                            <div class="form-group">
                                <br>
                                <label for="campo8">Encargado  sucursal:</label>
                            <select>
                              <option>JOSE Sucursal 1</option>
                              <option>DANIEL Sucursal 2</option>
                              <option>JONAS Sucursal 3</option>
                            </select>
                            </div>
                          </div>
                          <div class="col-md-2">
                            <label for="campo8">tipo de salida:</label>
                            <select>
                              <option>Baja</option>
                              <option>transpaso sucursal</option>             
                              </select>
                            <div class="form-group">
                                <br>
                                <label for="campo8">Chofer:</label>
                                <select>
                                  <option>JOSE  </option>
                                  <option>DANIEL</option>
                                  <option>JONAS </option>
                                </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                                <label for="nombre">Nota:<span class="required"></span></label>
                                <input type="text" onkeypress="return soloLetras(event)" class="form-control" id="observeciones" name="observeciones"   required>
                            </div>
                          </div>         
                        </div>
                        <hr>                 
                        <div class="row ">
                          <div class="col-md-3">
                            <div class="form-group">
                                <label for="nombre">Productos/Itens<span class="required"></span></label>
                                <select name="pedido_id" class="form-control selectric" id="producto">    
                                        
                                      <option value="">moto</option>
                                      <option value="">tv</option>
                             
                                </select>
                            </div>
                          </div>
                         
                          <div class="col-md-2">
                            <label for="nombre">Stock<span class="required"></span></label>
                            <div class="form-group">
                              <input type="number" min="0"   class="form-control" id="precio" name="stock"   required>
                            </div>
                          </div> 
                          <div class="col-md-2">
                            <label for="nombre">Precio venta<span class="required"></span></label>
                            <div class="form-group">
                              <input type="number" min="0"   class="form-control" id="precio" name="stock"   required>
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
                                  Agregar  <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                </button>
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="col-md-12">
                          <div class="card-block table-border-style">
                            <div class="table-responsive"> 
                              <table class="table table-bordered table-hover">
                                  <thead class="bg-primary">
                                        <tr>  
                                          <th class="text-center" style="color: #fff;">ID</th>
                                          <th class="text-center" style="color: #fff;">CODIGO</th>
                                            <th class="text-center" style="color: #fff;" scope="col">PRODUCTO</th>
                                            <th class="text-center" style="color: #fff; " scope="col">CANTIDAD</th>
                                            <th class="text-center" style="color: #fff; " scope="col">PRECIO VENTA</th>
                                            <th class="text-center" style="color: #fff;" scope="col">OPCIONES</th>
                                        </tr>
                                    </thead>
                                    <tbody id="data_persona">
                                        <!-- Aquí irán los datos de la tabla -->
                                        <tr>
                                          <td class="text-center">1</td>
                                          <td class="text-center">00891</td>
                                          <td class="text-center">moto</td>
                                          <td class="text-center">3</td>
                                          <td class="text-center">15000</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-center">00072</td>
                                            <td class="text-center">moto</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">16000</td>
                                          </tr>
                                    </tbody>
                                    <tfoot>
                                       
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
