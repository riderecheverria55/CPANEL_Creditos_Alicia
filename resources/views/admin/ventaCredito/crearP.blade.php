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
              Crear venta al credito
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
                              <label for="nombre">Clientes<span class="required"></span></label>
                              <select name="proveedor_id" class="form-control selectric">    
                                       
                                    <option value="">carlos</option>
                                    <option value="">juan</option>
                              
                              </select>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <label for="campo8">Tipo de ciclo:</label>
                          <select>
                          <option>Mensul</option>
                          <option>Quinsenal</option>
                          <option>Semanal</option>
                          </select>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="nombre">Conyuque garante<span class="required"></span></label>
                            <select name="proveedor_id" class="form-control selectric">    
                                     
                                  <option value="">carlos</option>
                                  <option value="">juan</option>
                            
                            </select>
                        </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="nombre">Garante personal<span class="required"></span></label>
                            <select name="proveedor_id" class="form-control selectric">    
                                     
                                  <option value="">carlos</option>
                                  <option value="">juan</option>
                            
                            </select>
                        </div>
                        
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="nombre">Fecha<span class="required"></span></label>
                            <input  type="date"   class="form-control" id="fecha" name="fecha" required>
                          </div>
                        </div>         
                      </div>
                      <hr>                 
                      <div class="row ">
                        <div class="col-md-2">
                          <div class="form-group">
                              <label for="nombre">Productos/Itens<span class="required"></span></label>
                              <select name="pedido_id" class="form-control selectric" id="producto">    
                                      
                                    <option value="">moto</option>
                                    <option value="">tv</option>
                           
                              </select>
                             
                          </div>
                        </div>
                        <div class="col-md-2">
                          <label for="nombre">Precio credito<span class="required"></span></label>
                          <div class="form-group">
                            <input type="number"  min="0"  class="form-control" id="cantidad"   required>
                        </div>
                      
                        </div>
                       
                        <div class="col-md-1">
                          <label for="nombre">Cuota inicial<span class="required"></span></label>
                          <div class="form-group">
                            <input type="number"  min="0"  class="form-control" id="cantidad"   required placeholder="">
                          </div>
                         
                        </div>
                        <div class="col-md-1">
                          <label for="nombre">Saldo/pagar<span class="required"></span></label>
                          <div class="form-group">
                            <input type="number"  min="0"  class="form-control" id="cantidad"   required>
                          </div>
                        
                        </div>
                        <div class="col-md-1">
                          <label for="campo8">Mes plazo:</label>
                          <select>
                          <option>12 meses</option>
                          <option>24 meses</option>
                          <option>36 meses</option>
                          </select>
                          
                        </div>
                        <div class="col-md-1">
                          <label for="nombre">N cuotas<span class="required"></span></label>
                          <div class="form-group">
                            <input type="number"  min="0"  class="form-control" id="cantidad"   required>
                          </div>
                         
                        </div>
                        <div class="col-md-2">
                          <label for="nombre">Cuotas a pagar<span class="required"></span></label>
                          <div class="form-group">
                            <input type="number"  min="0"  class="form-control" id="cantidad"   required>
                          </div>
                         
                        </div>
                        <div class="col-md-1">
                          <label for="nombre">.<span class="required"></span></label>
                          <div class="form-group">
                              
                              <button type="button" style=" color: white; font-weight: bold;" class="btn btn-primary" id="agregar">
                                Agregar producto  <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                              </button>
                          </div>
                        </div>
                      </div>
                        <br>                
                        <div class="row ">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="notas" class="form-label">Observecione</label>
                              <textarea class="form-control" id="notas" rows="3"></textarea>
                            </div>
                          </div>
                          <div class="col-md-2">
                            <label for="imagen">Seleccionar imagen </label>
                            <input type="file" id="imagen">
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
                                            <th class="text-center" style="color: #fff; width: 80px;" scope="col">SALDO A PAGAR</th>
                                            <th class="text-center" style="color: #fff; width: 80px;" scope="col">CUOTA A PAGAR</th>
                                            <th class="text-center" style="color: #fff;" scope="col">SUBTOTAL</th>
                                            <th class="text-center" style="color: #fff;" scope="col">OPCIONES</th>
                                        </tr>
                                    </thead>
                                    <tbody id="data_persona">
                                        <!-- Aquí irán los datos de la tabla -->
                                        <tr>
                                          <td class="text-center">1</td>
                                          <td class="text-center">moto</td>
                                          <td class="text-center">10000</td>
                                          <td class="text-center">1200</td>
                                          <td class="text-center">12000</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">moto</td>
                                            <td class="text-center">10000</td>
                                            <td class="text-center">1200</td>
                                            <td class="text-center">12000</td>
                                          </tr>
                                    </tbody>
                                    <tfoot>
                                      <tr>
                                          <th class="text-center" style="color: black" scope="col"></th>
                                          <th class="text-center" scope="col"></th>
                                          <th class="text-center" scope="col"></th>
                                          <th class="text-center" style="color: black" scope="col">TOTAL CREDITO</th>
                                          <th class="text-center" scope="col"><h5 style="color: black" id="total">Bs/20000.00</h5></th>
                                      </tr>
                                  </tfoot>
                                    <tfoot>
                                        <tr>
                                            <th class="text-center" style="color: black" scope="col"></th>
                                            <th class="text-center" scope="col"></th>
                                            <th class="text-center" scope="col"></th>
                                            <th class="text-center" style="color: black" scope="col"> TOTAL CUOTA A PAGAR</th>
                                            <th class="text-center" scope="col"><h5 style="color: black" id="total">Bs/ 2400.00</h5></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <br>
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
