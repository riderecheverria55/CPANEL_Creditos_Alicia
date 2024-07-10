@extends('admin.principal')
@section('contenido')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
            Venta al contado
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
                                              <th class="text-center" style="color: #fff;">TIPO EMICION</th>
                                              <th class="text-center" style="color: #fff;">PRECIO DE VENTA</th>
                                              <th class="text-center" style="color: #fff;">FECHA</th>
                                              <th class="text-center" style="color: #fff;">ESTADO</th>
                                              <th class="text-center" style="color: #fff;">ACCIONES</th>
                                          </thead>
                                          <tbody>
                                                  <tr>
                                                      <td class="text-center">1</td>
                                                      <td class="text-center">05686</td>
                                                      <td class="text-center">factura</td>
                                                      <td class="text-center">5657 Bs</td> 
                                                      <td class="text-center">12/12/2024</td>
                                                      <td class="text-center">ACTIVO</td>
                                                      <td style="width: 20%;">
                                                        <center>
                                                        <a class="btn btn-outline-danger" href="#" title="pdf">
                                                            <i class="fa fa-file-pdf"></i></a>
                                                        </center>
                                                    </td>  

                                                  </tr>
                                                  <tr>
                                                    <td class="text-center">2</td>
                                                    <td class="text-center">05686</td>
                                                    <td class="text-center">Recibo</td>
                                                    <td class="text-center">5657 Bs</td> 
                                                    <td class="text-center">12/12/2024</td>
                                                    <td class="text-center">ACTIVO</td>
                                                    <td style="width: 20%;">
                                                      <center>
                                                      <a class="btn btn-outline-danger" href="#" title="pdf">
                                                          <i class="fa fa-file-pdf"></i></a>
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
        </div>
    </div>
</div>
@endsection
