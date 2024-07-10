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
           Venta al contado
            </h3>
      </div>

      <div class="row">
        <div class="col-md-8 ">
          <div class="card">
            <div class="card-body">
              <div class="card">
                <div class="card-body">
                  <form action="" method="POST" class="form-horizontal">
              
                    <input type="text" name="id"  value="" hidden >
                    <div class="row ">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="nombre">Seleccionar cliente
                            <span class="required"></span></label>
                            <select name="pedido_id" class="form-control selectric" id="producto">    
                                    
                                  <option value="">jose carlos rocha</option>
                                  <option value="">eliel sanchez</option>
                            </select>
                           
                        </div>
                      </div>
                      <div class="col-md-2">
                        <br>
                        <button type="button" style=" color: white; font-weight: bold;" class="btn btn-primary" id="agregar">
                          Cliente  <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                        </button>
                      </div>
                      <div class="col-md-3">
                        <label for="campo8">Seleccionar emicion:</label>
                        <select>
                        <option>Factura</option>
                        <option>Recibo</option>
                        </select>
                        
                      </div>
                      <div class="col-md-3">
                            <label for="nombre">Fecha<span class="required"></span></label>
                            <input  type="date"   class="form-control" id="fecha" name="fecha" required>
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
                        <label for="nombre">Cantidad<span class="required"></span></label>
                        <div class="form-group">
                          <input type="number"  min="0"  class="form-control" id="cantidad"   required>
                        </div>
                      </div>
                      <div class="col-md-1">
                        <label for="nombre">Stopck<span class="required"></span></label>
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
                        <label for="nombre">Descuento<span class="required"></span></label> 
                        <div class="form-group">
                          <input type="number" min="0"   class="form-control" id="precio" name="stock"   required>
                        </div>
                      </div>
                      <div class="col-md-2">
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
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="table">
                                <thead class="bg-info">
                                    <tr>
                                        <th class="text-center" style="color: #fff; width: 20px;" scope="col">CANTIDAD</th>
                                        <th class="text-center" style="color: #fff;" scope="col">PRODUCTO</th>
                                        <th class="text-center" style="color: #fff; width: 80px;" scope="col">PRECIO VENTA</th>
                                        <th class="text-center" style="color: #fff; width: 80px;" scope="col">DESCUENTO</th>
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
                                      <td class="text-center">120</td>
                                      <td class="text-center">12000</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="text-center">TV</td>
                                        <td class="text-center">10000</td>
                                        <td class="text-center">120</td>
                                        <td class="text-center">12000</td>
                                      </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="text-center" style="color: black" scope="col"></th>
                                        <th class="text-center" scope="col"></th>
                                        <th class="text-center" scope="col"></th>
                                        <th class="text-center" style="color: black" scope="col">TOTAL</th>
                                        <th class="text-center" scope="col"><h5 style="color: black" id="total">Bs/ 0.00</h5></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    
                  </form>
            </div>
          </div>
        </div>
      </div>
    </div>
        <div class="col-md-4 ">
          <div class="card">
            <div class="card-body">
              <div class="card">
                <div class="card-body">
              <h4 class="card-title">
               Realizar venta
              </h4>
             
              <form>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="prestamo" class="form-label">N comprobante</label>
                        <input type="text" class="form-control" id="prestamo" value="45665" readonly>
                    </div>
                    
                   
                   
                   
                    
                    <div class="col-md-6">
                        <label for="campo8">Tipo de pago:</label>
                        <select>
                        <option>PAGO EN EFECTIVO</option>
                        <option>TRANSFERENCIA BANCARIA</option>
                        <option>PAGO QR</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                      <label for="monto-pagar-Bs" class="form-label">Total a pagar</label>
                      <div class="input-group">
                          <span class="input-group-text">Bs</span>
                          <input type="text" class="form-control" id="monto-pagar-Bs" value="150.50">
                      </div>
                  </div>
                   
                    <div class="col-12">
                        <label for="notas" class="form-label">Notas</label>
                        <textarea class="form-control" id="notas" rows="3"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="monto-pagar-usd" class="form-label">Pago efectivo</label>
                        <div class="input-group">
                            <span class="input-group-text">Bs</span>
                            <input type="text" class="form-control" id="monto-pagar-usd" value="3500.50">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="monto-pagar-Bs" class="form-label">Cambio efectivo</label>
                        <div class="input-group">
                            <span class="input-group-text">Bs</span>
                            <input type="text" class="form-control" id="monto-pagar-Bs" value="150.50">
                        </div>
                    </div>
                </div>
            </form>
                <br>
                <br>
                <button onclick="qr()" class="btn btn-dark mr-2">Registrar</button>
                <a href="#" class="btn btn-dark" data-dismiss="modal">Cancelar</a>
            </div>
        </div>



            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
