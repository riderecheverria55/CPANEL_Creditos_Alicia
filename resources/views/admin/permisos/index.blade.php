@extends('layouts.admin')
@section('title', 'Listado de permisos')
@section('contenido')
<div class="main-panel">          
    <div class="content-wrapper">
      <div class="page-header">
      <h3 class="page-title">
              Permisos
            </h3>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="card">
                <div class="card-body">
                <div class="table-responsive">
                    <div id="order-listing_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">  
                        <div class="row">
                            <div class="col-sm-12 ">
                                <div class="dataTables_length" id="order-listing_length">
                                    <form class="form-inline">            
                                        <div>
                                            <input class="form-control mr-sm-2 light-table-filter" data-table="order-table"
                                            type="text" placeholder="Busqueda por nombre" onkeypress="return soloLetras(event)">                                        
                                            <a href="" class="btn btn-dark">
                                                <i class="fas fa-undo-alt"></i>
                                            </a>
                                            <a href=""  class="btn btn-dark ">
                                                + Agregar nuevo
                                            </a>
                                        </div>                           
                                    </form>   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="products_listing" class="table order-table ">  
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody >
                                        <tr>    
                                            <th scope="row"></th>
                                          <td></td>
                                            <td style="width: 20%;">
                                                <a class="btn btn-outline-info"
                                                    href=""
                                                    title="Editar">
                                                    <i class="far fa-edit"></i>
                                                </a> 
                                            </td>
                                        </tr>    
                                </tbody>
                            <table>
                        </div>
                    </div>
                <div class="row">  
            <div class="col-lg-12">
         
         
        </div>
    </div>               
@endsection
@section('scripts')





