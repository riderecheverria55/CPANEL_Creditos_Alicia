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
        Ver ingreso
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
                   
                    <div class="col-md-2">
                      <div class="form-group">
                        <label for="nombre"><b>Numero ingreso</b><span class="required"></span></label>
                        <p>100044</p>
                    
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                       
                        <label for="nombre"><b>Sucursal</b><span class="required"></span></label>
                        <p>sucrsal 1</p>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label for="nombre"><b>Fecha</b><span class="required"></span></label>
                        <p>12/10/2024</p>
                       
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                       
                        <label for="nombre"><b>tipo de ingreso</b><span class="required"></span></label>
                        <p>Orden de compra</p>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label for="nombre"><b>Oserveciones</b><span class="required"></span></label>
                        <p>ninguna</p>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="card-block table-border-style">
                      <div class="table-responsive"> 
                        <table class="table table-bordered table-hover">
                            <thead class="bg-primary">
                          <tr>
                            <th class="text-center" style="color: #fff;">ID</th> 
                            <th class="text-center" style="color: #fff;" scope="col">PRODUCTO</th>
                            <th class="text-center" style="color: #fff; ;" scope="col">CANTIDAD</th>
                            <th class="text-center" style="color: #fff;" scope="col">PRECIO COMPRA</th>
                            <th class="text-center" style="color: #fff; " scope="col">PRECIO VENTA</th>
                          </tr>
                        </thead>
                        <tbody id="data_persona">
                          <tr>
                            <td class="text-center">1</td>
                            <td class="text-center">moto de trabajo</td>
                            <td class="text-center">1</td>
                            <td class="text-center">12000</td>
                            <td class="text-center">12000</td>
                          </tr>
                          <tr>
                            <td class="text-center">1</td>
                            <td class="text-center">moto de trabajo</td>
                            <td class="text-center">1</td>
                            <td class="text-center">12000</td>
                            <td class="text-center">12000</td>
                          </tr>
                        </tbody>
                        <tfoot>  
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