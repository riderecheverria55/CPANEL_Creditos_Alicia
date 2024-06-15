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
              Ingreso Inicial
            </h3>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="card">
                <div class="card-body">
                    <form action="{{ route('ingresoOrdenCompra.store') }}" method="POST" " class="form-horizontal">
                        @csrf
                        <input type="text" name="id"  value="" hidden >
                        <div class="row ">
                          <div class="col-md-2">
                            <label for="campo8">sucursal:</label>
                            <select name="sucursal_id" class="form-control selectIngresoInicial">
                                @foreach($sucursales as $item)
                                    <option value="{{$item->COD_SUCURSAL}}">{{$item->NOMBRE_SURCUSAL}}</option>
                                @endforeach
                            </select>
                            <div class="form-group">
                                <br>
                                <div class="form-group">
                                    <br>
                                    <label for="nombre">N. Orden Compra<span class="required"></span></label>
                                    <input type="number" min="0"   class="form-control" id="numero_orden" name="numero_orden"   required>
                                    <button type="button" class="btn btn-primary mt-2" id="buscar">Buscar</button>
                                </div>

                            </div>
                          </div> 
                          <div class="col-md-2">
                            <label for="nombre">Fecha<span class="required"></span></label>
                                <input  type="date"   class="form-control" id="fecha" name="fecha" required>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                                <label for="nombre">observeciones<span class="required"></span></label>
                                <input type="text" onkeypress="return soloLetras(event)" class="form-control" id="observeciones" name="observeciones"   required>
                            </div>
                          </div>         
                        </div>
                        <hr>                 
                        <br>
                        <div class="col-md-12">
                          <div class="card-block table-border-style">
                            <div class="table-responsive"> 
                              <table class="table table-bordered table-hover" id="table_ingreso">
                                  <thead class="bg-primary">
                                        <tr>  
                                          <th class="text-center" style="color: #fff;">ID</th>
                                            <th class="text-center" style="color: #fff;" scope="col">PRODUCTO</th>
                                            <th class="text-center" style="color: #fff; " scope="col">CANTIDAD</th>
                                            <th class="text-center" style="color: #fff;" scope="col">PRECIO COMPRA</th>
                                            <th class="text-center" style="color: #fff;" scope="col">SUBTOTAL</th>
                                        </tr>
                                    </thead>
                                    <tbody id="data_persona">
                                       
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th class="text-center" style="color: black" scope="col">TOTAL</th>
                                            <th class="text-center" scope="col"></th>
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
  document.getElementById('buscar').addEventListener('click', function() {
    let numeroOrden = document.getElementById('numero_orden').value;
    
    fetch(`{{ route('ingresoOrdenCompra.datos') }}?numero_orden=${numeroOrden}`)
      .then(response => response.json())
      .then(data => {
        let tbody = document.getElementById('data_persona');
        tbody.innerHTML = '';
        if (data.length === 0)
        {
            Swal.fire({
                icon: 'error',
                title: 'No se encontró orden de compra',
                text: 'Intenta con otro número de orden.',
            });
            return;
        }
        let total = 0;
        let contador = 1;
        data.forEach(item => {
          total += item.SUB_TOTA_COMPRA;

          let row = `
            <tr>
              <td class="text-center">${contador}</td>
              <td class="text-center"><input  class="form-control text-center" type="hidden" name="idproducto[]" value="${item.COD_ITEM}">${item.NOMBRE}</td>
              <td class="text-center"><input  class="form-control text-center" type="hidden" name="cantidad[]" value="${item.CANTIDAD_COMPRA}">${item.CANTIDAD_COMPRA}</td>
              <td class="text-center"><input  class="form-control text-center" type="hidden" name="precio[]" value="${item.PRECIO_COMPRA}">${item.PRECIO_COMPRA}</td>
              <td class="text-center"><input  class="form-control text-center" type="hidden" name="subtotal[]" value="${item.SUB_TOTA_COMPRA}">${item.SUB_TOTA_COMPRA}</td>
            </tr>
          `;
            contador++;
          tbody.innerHTML += row;
        });

        document.getElementById('total').innerText = `Bs/ ${total.toFixed(2)}`;
      })
      .catch(error => console.error('Error:', error));
  });
</script>
@endsection
