@extends('admin.principal')
@section('contenido')
<style>
  
    .modal-content {
        border-radius: 0.5rem;
    }
    .form-control:read-only {
        background-color: #f8f9fa;
    }
    .modal .modal-dialog .modal-content .modal-body {
        padding: 25px 45px;

}
@media (min-width: 768px) {
    .col-md-6 {
        flex: 0 0 40%;
        max-width: 25%;
    }
}    
</style>
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
            Venta al credito
        </h3>
      </div>
      <div class="card">
        <div class="card-body">
        <div class="card">
          <div class="card-body">                   
                        <div id="order-listing_wrapper"
                            class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12 ">
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
                                                <a href="" class="btn btn-dark ">
                                                    + Agregar nuevo
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-block table-border-style">
                                    <div class="table-responsive"> 
                                      <table class="table table-bordered table-hover">
                                          <thead class="bg-primary">
                                              <th class="text-center" style="color: #fff;">ID</th>
                                              <th class="text-center" style="color: #fff;">CODIGO</th>
                                              <th class="text-center" style="color: #fff;">CLIENTE</th>
                                              <th class="text-center" style="color: #fff;">TIPO CUOTA</th>
                                              <th class="text-center" style="color: #fff;">N. CUOTAS</th>
                                              <th class="text-center" style="color: #fff;">CREDITO TOTAL</th>
                                              <th class="text-center" style="color: #fff;">ESTADO</th>
                                              <th class="text-center" style="color: #fff;">ACCIONES</th>
                                          </thead>
                                          <tbody>
                                                  <tr>
                                                      <td class="text-center">1</td>
                                                      <td class="text-center">00045</td>
                                                      <td class="text-center">JUAN ZANCHES</td>
                                                      <td class="text-center">MENSUAL</td> 
                                                      <td class="text-center">12</td>
                                                      <td class="text-center">20000</td>
                                                      <td class="text-center"><label class="badge badge-danger">PENDIENTE</label></td>
                                                      <td style="width: 20%;">
                                                        <center>
                                                        <a class="btn btn-outline-danger" href="#" title="pdf">
                                                            <i class="fa fa-file-pdf"></i></a>
                                                            <a class="btn btn-outline-info" href="#" title="Editar"
                                                            data-toggle="modal" data-target="#editarProveedorModal">PAGAR
                                                            <i class="far fa-edit"></i></a>
                                                        </center>
                                                    </td>  

                                                  </tr>
                                                  <tr>
                                                    <td class="text-center">2</td>
                                                      <td class="text-center">00045</td>
                                                      <td class="text-center">JUAN ZANCHES</td>
                                                      <td class="text-center"> QUINSENAL</td> 
                                                      <td class="text-center">6</td>
                                                      <td class="text-center">3000</td>
                                                      <td class="text-center"><label class="badge badge-success">CANCELADO </label></td>
                                                      <td style="width: 20%;">
                                                      <center>
                                                      <a class="btn btn-outline-danger" href="#" title="pdf">
                                                          <i class="fa fa-file-pdf"></i></a>
                                                          <a class="btn btn-outline-info" href="#" title="Editar"
                                                            data-toggle="modal" data-target="#editarProveedorModal">PAGAR
                                                            <i class="far fa-edit"></i></a>
                                                      </center>
                                                  </td>  

                                                </tr>                       
                                                
                                          </tbody>
                                      </table>
                                    </div>     
                        </div>
                      <div class="row">
                    <div class="col-lg-12">
                </div>
            </div>
    <!-- Modal PAGAR CUOTA -->
    <div class="modal fade" id="editarProveedorModal" tabindex="-1" role="dialog" aria-labelledby="editarProveedorModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarProveedorModalTitle">Pagar cuota</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><B>X</B></span>
                    </button>
                </div>
                <div class="modal-body">

                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="prestamo" class="form-label">Codigo</label>
                                <input type="text" class="form-control" id="prestamo" value="45665" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="tipo-cambio" class="form-label">N de cuota</label>
                                <input type="text" class="form-control" id="tipo-cambio" value="1" readonly>
                            </div>
                            <div class="col-md-6">
                                
                                <label for="total-credito" class="form-label">Total Credito</label>
                                <div class="input-group">
                                    <span class="input-group-text">Bs</span>
                                    <input type="text" class="form-control" id="total-credito" value="12000.00" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="total-credito" class="form-label">Saldo Credito</label>
                                <div class="input-group">
                                    <span class="input-group-text">Bs</span>
                                    <input type="text" class="form-control" id="total-credito" value="8000.00" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="fecha-vencimiento" class="form-label">Fecha de Vencimiento</label>
                                <input type="text" class="form-control" id="fecha-vencimiento" value="09-02-2021" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="fecha-pago" class="form-label">Fecha de Pago</label>
                                <input type="date" class="form-control" id="fecha-pago" value="2021-04-21">
                            </div>
                            <div class="col-md-6">
                                <label for="total-credito" class="form-label">Total amortizado</label>
                                <div class="input-group">
                                    <span class="input-group-text">Bs</span>
                                    <input type="text" class="form-control" id="total-credito" value="515.00" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="total-amortizado" class="form-label">Cuota a pagar</label>
                                <div class="input-group">
                                    <span class="input-group-text">Bs</span>
                                    <input type="text" class="form-control" id="total-amortizado" value="44.95" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="campo8">Tipo de pago:</label>
                                <select>
                                <option>PAGO EN EFECTIVO</option>
                                <option>TRANSFERENCIA BANCARIA</option>
                                <option>PAGO QR</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                
                                <label for="campo8">Tipo de cuota:</label>
                                <select>
                                <option>CUOTA</option>
                                <option>ACUENTA</option>
                                <option>AMORTIZACION</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="monto-pagar-usd" class="form-label">Total a pagar</label>
                                <div class="input-group">
                                    <span class="input-group-text">Bs</span>
                                    <input type="text" class="form-control" id="monto-pagar-usd" value="2500.46">
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
    <!-- fin Modal PAGAR CUOTA  -->




        </div>
    </div>
</div>
@endsection
