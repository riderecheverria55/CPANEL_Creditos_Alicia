@extends('admin.principal')
@section('contenido')
    <div class="main-panel">          
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Registro de pagos</h3>
            </div>
            <div class="row">
                <div class="col-10">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('credito.storePagar') }}" method="POST" class="form-horizontal">
                                @csrf
                                <input type="text" name="COD_CREDITO" value="{{$creditoPadre->COD_CREDITO}}" hidden>
                                <input type="date" value="{{$fecha}}" name="FECHA_VENCIMIENTO" hidden>
                                <div class="row g-3">
                                    <div class="col-md-2">
                                        <label for="prestamo" class="form-label">Codigo</label>
                                        <input type="text" class="form-control" id="prestamo" value="{{ $creditoPadre->CODIGO_CREDITO}}" readonly>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="tipo-cambio" class="form-label">N de cuota</label>
                                        <input type="text" name="NRO_CUOTA" class="form-control" id="tipo-cambio" value="{{$ultimoRegistro->NRO_CUOTA +1}}" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="total-credito" class="form-label">Total Credito</label>
                                        <div class="input-group">
                                            <span class="input-group-text">Bs</span>
                                            <input type="text" class="form-control" id="total-credito" value="{{ $creditoPadre->PRECIO_CREDITO}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="total-credito" class="form-label">Saldo Credito</label>
                                        <div class="input-group">
                                            <span class="input-group-text">Bs</span>
                                            <input type="text" class="form-control" id="total-credito" value="{{ $creditoPadre->PRECIO_CREDITO - $totalMontoPagado}}" readonly>
                                        </div>
                                    </div>                           
                                    <div class="col-md-4">
                                        <label for="fecha-vencimiento" class="form-label">Fecha de Vencimiento</label>
                                        <span class="badge badge-primary">{{$fecha}}</span>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="fecha-pago" class="form-label">Fecha de Pago</label>
                                        <input type="date" class="form-control" name="FECHA_PAGO" id="fecha-pago" value="2021-04-21">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="total-credito" class="form-label">Total amortizado</label>
                                        <div class="input-group">
                                            <span class="input-group-text">Bs</span>
                                            <input type="text" class="form-control" id="total-credito" value="{{$totalMontoPagado}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="total-amortizado" class="form-label">Cuota a pagar</label>
                                        <div class="input-group">
                                            <span class="input-group-text">Bs</span>
                                            <input type="text" class="form-control" id="total-amortizado" value="{{$creditoPadre->MTO_CUOTA}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="campo8">Tipo de pago:</label>
                                        <select name="TIPO_PAGO">
                                            <option value="1" >PAGO EN EFECTIVO</option>
                                            <option value="2" >TRANSFERENCIA BANCARIA</option>
                                            <option value="3" >PAGO QR</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="campo8">Tipo de cuota:</label>
                                        <select name="TIPO_CUOTA">
                                            <option value="1" >CUOTA</option>
                                            <option value="2" >ACUENTA</option>
                                            <option value="3" >AMORTIZACION</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="monto-pagar-usd" class="form-label">Total a pagar</label>
                                        <div class="input-group">
                                            <span class="input-group-text">Bs</span>
                                            <input type="text" name="TOTAL_PAGAR" class="form-control" id="total_pagar" value="{{$creditoPadre->MTO_CUOTA}}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="notas" class="form-label">Notas</label>
                                        <textarea class="form-control" name="OBSERVACION" id="notas" rows="3"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="monto-pagar-usd" class="form-label">Pago efectivo</label>
                                        <div class="input-group">
                                            <span class="input-group-text">Bs</span>
                                            <input type="text" class="form-control" id="pago_efectivo" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="monto-pagar-Bs" class="form-label">Cambio efectivo</label>
                                        <div class="input-group">
                                            <span class="input-group-text">Bs</span>
                                            <input type="text" class="form-control" id="cambio_efectivo" >
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <button type="submit" class="btn btn-dark mr-2">Registrar</button>
                                <a href="{{ route('credito.index') }}" class="btn btn-dark" data-dismiss="modal">Cancelar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let montoPagarInput = document.getElementById('total_pagar');
            let pagoEfectivoInput = document.getElementById('pago_efectivo');
            let cambioEfectivoInput = document.getElementById('cambio_efectivo');

            function calcularCambio() {
                let montoPagar = parseFloat(montoPagarInput.value) || 0;
                let pagoEfectivo = parseFloat(pagoEfectivoInput.value) || 0;
                let cambio = pagoEfectivo - montoPagar;
                cambioEfectivoInput.value = cambio.toFixed(2);
            }

            pagoEfectivoInput.addEventListener('input', calcularCambio);

            // Disparar el evento input al cargar la página para establecer el cambio inicial
            var event = new Event('input');
            pagoEfectivoInput.dispatchEvent(event);
        });
    </script>
@endsection