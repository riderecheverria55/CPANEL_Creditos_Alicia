@extends('admin.principal')
@section('contenido')
<style>
  /* Estilos adicionales para hacer la tabla más legible en dispositivos móviles */
  table {
    font-size: 14px;
  }

  th,
  td {
    padding: 8px;
  }

  /* Estilos para el pie de página */
  tfoot th {
    padding-top: 12px;
    font-weight: bold;
  }

  #table th {
    width: 20%;
    /* Puedes ajustar este valor según tus necesidades */
  }
</style>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        Ver orden de compra
      </h3>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="card">
              <div class="card-body">
                <div class="card-body">
                  <input type="text" name="id" hidden>
                  <div class="row " style="padding-left: 20px;">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="nombre"><b>Proveedor</b><span class="required"></span></label>

                        <p>jonas</p>

                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label for="nombre"><b>Fecha</b><span class="required"></span></label>

                        <p>12/10/2024</p>
                        <label for="nombre"><b>Sucursal</b><span class="required"></span></label>

                        <p>sucrsal 1</p>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label for="nombre"><b>N. de Factura</b><span class="required"></span></label>

                        <p>2345</p>

                        <label for="nombre"><b>Almacen</b><span class="required"></span></label>

                        <p>almacen 1</p>

                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="table-responsive">
                      <table class="table table-bordered table-hover" id="table">
                        <thead class="bg-info">
                          <tr>
                            <th class="text-center" style="color: #fff; width: 20px;" scope="col">CANTIDAD</th>
                            <th class="text-center" style="color: #fff;" scope="col">PRODUCTO</th>
                            <th class="text-center" style="color: #fff; width: 80px;" scope="col">PRECIO U.</th>
                            <th class="text-center" style="color: #fff;" scope="col">SUBTOTAL</th>
                          </tr>
                        </thead>
                        <tbody id="data_persona">

                          <tr>
                            <td class="text-center">1</td>
                            <td class="text-center">moto de trabajo</td>
                            <td class="text-center">10000</td>
                            <td class="text-center">12000</td>
                          </tr>
                          <tr>
                            <td class="text-center">1</td>
                            <td class="text-center">moto</td>
                            <td class="text-center">10000</td>
                            <td class="text-center">12000</td>
                          </tr>

                        </tbody>
                        <tfoot>
                          <th class="text-center" style="color: black" scope="col">TOTAL</th>
                          <th class="text-center" scope="col"></th>
                          <th class="text-center" scope="col"></th>
                          <th class="text-center" scope="col">
                            <h5 style="color: black" id="total"> 12000/Bs</h5> <input type="hidden" name="tota_pedido"
                              id="total_pedido">
                          </th>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
                <br>
                <div class="col-md-12" id="guardar">
                  <a class="btn btn-dark " href="">Volver</a>
                </div>
                </form>
              </div>
            <div class="row">
          <div class="col-lg-12">
        </div>
      </div>
@endsection