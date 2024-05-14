@extends('admin.principal')
@section('contenido')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
            Datos orden de compra
        </h3>
      </div>
      <div class="card">
        <div class="card-body">
        <div class="card">
          <div class="card-body">
                    <div class="table-responsive">
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
                                      <table class="table table-hover" >
                                          <thead class="bg-primary">
                                              <th class="text-center" style="color: #fff;">ID</th>
                                              <th class="text-center" style="color: #fff;">PROVEEDOR</th>
                                              <th class="text-center" style="color: #fff;">DESCRIPCION</th>
                                              <th class="text-center" style="color: #fff;">N. FACTURA</th>
                                              <th class="text-center" style="color: #fff;">FECHA</th>
                                              <th class="text-center" style="color: #fff;">ACCIONES</th>
                                          </thead>
                                          <tbody>
                                                  <tr>
                                                      <td class="text-center">1</td>
                                                      <td class="text-center">juan</td>
                                                      <td class="text-center">moto</td>
                                                      <td class="text-center">12456789</td>
                                                      <td class="text-center">12/12/2024</td>
                                                      <td style="width: 20%;">
                                                        <center>
                                                        <a class="btn btn-outline-warning" href="">
                                                            <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                        <a class="btn btn-outline-danger" href="#" title="pdf">
                                                            <i class="fa fa-file-pdf"></i></a>
        
                                                        <a href="#" class="btn btn-outline-danger" data-toggle="modal"
                                                            data-target=""><i class="far fa-trash-alt"></i></a>
                                                        </center>
                                                    </td>                             
                                                  </tr>
                                                  <tr>
                                                    <td class="text-center">2</td>
                                                    <td class="text-center">juan</td>
                                                    <td class="text-center">moto</td>
                                                    <td class="text-center">12456789</td>
                                                    <td class="text-center">12/12/2024</td>
                                                    <td style="width: 20%;">
                                                      <center>
                                                      <a class="btn btn-outline-warning" href="">
                                                          <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                          <a class="btn btn-outline-danger" href="#" title="pdf">
                                                            <i class="fa fa-file-pdf"></i></a>
      
                                                      <a href="#" class="btn btn-outline-danger" data-toggle="modal"
                                                          data-target=""><i class="far fa-trash-alt"></i></a>
                                                      </center>
                                                  </td>                             
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td class="text-center">juan</td>
                                                    <td class="text-center">moto</td>
                                                    <td class="text-center">12456789</td>
                                                    <td class="text-center">12/12/2024</td>
                                                    <td style="width: 20%;">
                                                      <center>
                                                      <a class="btn btn-outline-warning" href="">
                                                          <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                          <a class="btn btn-outline-danger" href="#" title="pdf">
                                                            <i class="fa fa-file-pdf"></i></a>
      
                                                      <a href="#" class="btn btn-outline-danger" data-toggle="modal"
                                                          data-target=""><i class="far fa-trash-alt"></i></a>
                                                      </center>
                                                  </td>                             
                                                </tr>
                               
                                          </tbody>
                                      </table>
                                    </div>
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
