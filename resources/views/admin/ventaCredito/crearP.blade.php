@extends('admin.principal')
@section('contenido')
    <div class="main-panel">          
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Crear venta al credito</h3>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('credito.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="nombre">Clientes<span class="required"></span></label>
                                            <select name="cliente_id" class="form-control selectric">    
                                                @foreach($clientes as $item)
                                                    <option value="{{$item->COD_CLIENTE}}">{{$item->NOMBRE}} {{$item->APELLIDO}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="campo8">Tipo de ciclo:</label>
                                        <select name="tipo_ciclo" id="tipo_ciclo" class="form-control selectric">
                                            <option value="MEN" >MENSUAL</option>
                                            <option value="QUI" >QUINCENAL</option>
                                            <option value="SEM" >SEMANAL</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="nombre">Conyuque garante<span class="required"></span></label>
                                            <select name="conyugue_id" class="form-control selectric">    
                                                @foreach($clientes as $item)
                                                    <option value="{{$item->COD_CLIENTE}}">{{$item->NOMBRE}} {{$item->APELLIDO}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="nombre">Garante personal<span class="required"></span></label>
                                            <select name="garante_id" class="form-control selectric">    
                                                @foreach($clientes as $item)
                                                    <option value="{{$item->COD_CLIENTE}}">{{$item->NOMBRE}} {{$item->APELLIDO}}</option>
                                                @endforeach
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
                                            <select name="producto_id" class="form-control selectric" id="producto">        
                                                @foreach($productos as $item)
                                                    <option value="{{$item->COD_ITEM}}" data-precio="{{$item->PRECIO_CREDITO}}">{{$item->CODIGO_ITEM}}  {{$item->NOMBRE}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="nombre">Precio credito<span class="required"></span></label>
                                            <input type="number" name="precio_credito" min="0"  class="form-control" id="precio_credito" required>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <label for="nombre">Cuota inicial<span class="required"></span></label>
                                        <div class="form-group">
                                            <input type="number" name="cuota_inicial" min="0" class="form-control" id="cuota_inicial" required >
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <label for="nombre">Saldo/pagar<span class="required"></span></label>
                                        <div class="form-group">
                                            <input type="number" name="saldo_pagar" min="0" class="form-control" id="saldo_pagar" required readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                    <label for="campo8">Mes plazo:</label>
                                    <select name="meses_id" class="form-control selectric" id="meses">
                                        <option value="1">1 mes</option>
                                        <option value="2">2 meses</option>
                                        <option value="3">3 meses</option>
                                        <option value="4">4 meses</option>
                                        <option value="5">5 meses</option>
                                        <option value="6">6 meses</option>
                                        <option value="7">7 meses</option>
                                        <option value="8">8 meses</option>
                                        <option value="9">9 meses</option>
                                        <option value="10">10 meses</option>
                                        <option value="11">11 meses</option>
                                        <option value="12">12 meses</option>
                                        <option value="24" >24 meses</option>
                                        <option value="36" >36 meses</option>
                                    </select>
                                    </div>
                                    <div class="col-md-1">
                                        <label for="nombre">N cuotas<span class="required"></span></label>
                                        <div class="form-group">
                                            <input type="number" name="nro_cuotas" min="0"  class="form-control" id="nro_cuotas"   required>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="nombre">Cuotas a pagar<span class="required"></span></label>
                                        <div class="form-group">
                                            <input type="number" name="cuotas_pagar"  min="0"  class="form-control" id="cuotas_pagar"   required>
                                        </div>
                                    </div>
                                </div>
                                <br>                
                                <div class="row ">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="notas" class="form-label">Observecione</label>
                                            <textarea name="observaciones" class="form-control" id="notas" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="imagen">Seleccionar imagen </label>
                                        <input type="file" id="imagen" name="file">
                                    </div>
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
@endsection
@section('script')  
<script>
    document.addEventListener('DOMContentLoaded', function () {

        let productoSelect = document.getElementById('producto');
        let precioInput = document.getElementById('precio_credito');
        let cuotaInicialInput = document.getElementById('cuota_inicial');
        let saldoPagarInput = document.getElementById('saldo_pagar');
        let tipoCicloSelect = document.getElementById('tipo_ciclo');
        let mesesSelect = document.getElementById('meses');
        let nroCuotasInput = document.getElementById('nro_cuotas');
        let cuotasPagarInput = document.getElementById('cuotas_pagar');

        productoSelect.addEventListener('change', function () {
            var selectedOption = this.options[this.selectedIndex];
            var precioCredito = selectedOption.getAttribute('data-precio');
            precioInput.value = precioCredito;
            calcularSaldo();
            calcularCuotas();
        });

        cuotaInicialInput.addEventListener('input', function () {
            calcularSaldo();
            calcularCuotas();
        });

        precioInput.addEventListener('input', function () {
            calcularSaldo();
            calcularCuotas();
        });

        tipoCicloSelect.addEventListener('change', calcularCuotas);
        mesesSelect.addEventListener('change', calcularCuotas);

        function calcularSaldo() {
            var precioCredito = parseFloat(precioInput.value) || 0;
            var cuotaInicial = parseFloat(cuotaInicialInput.value) || 0;

            if (cuotaInicial > precioCredito) {
                cuotaInicialInput.value = precioCredito;
                cuotaInicial = precioCredito;
            }

            var saldoPagar = precioCredito - cuotaInicial;
            saldoPagarInput.value = saldoPagar;
        }

        function calcularCuotas() {
            var tipoCiclo = tipoCicloSelect.value;
            var meses = parseInt(mesesSelect.value) || 0;
            var saldoPagar = parseFloat(saldoPagarInput.value) || 0;
            var nroCuotas = 0;
            var montoCuota = 0;

            if (tipoCiclo === 'MEN') {
                nroCuotas = meses;
            } else if (tipoCiclo === 'QUI') {
                nroCuotas = meses * 2;
            } else if (tipoCiclo === 'SEM') {
                nroCuotas = meses * 4;
            }

            nroCuotasInput.value = nroCuotas;

            if (nroCuotas > 0) {
                montoCuota = saldoPagar / nroCuotas;
            }

            cuotasPagarInput.value = montoCuota.toFixed(2); // Redondea a dos decimales
        }

        // Disparar el evento change al cargar la página para establecer el precio inicial
        var event = new Event('change');
        productoSelect.dispatchEvent(event);
        tipoCicloSelect.dispatchEvent(event);
        mesesSelect.dispatchEvent(event);
    });
</script>
@endsection
