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
             Registro de pagos
            </h3>
      </div>
      <div class="row">
      
        <div class="col-10">
          <div class="card">
            <div class="card-body">
              <div class="card">
                <div class="card-body">


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


                <div class="row">  
            <div class="col-lg-12">
        </div>
     
    </div> 
@endsection
