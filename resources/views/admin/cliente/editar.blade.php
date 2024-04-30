@extends('layouts.admin')
@section('title', 'Informacion de clientes')

@section('contenido')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Datos del cliente</h3>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="order-listing_wrapper"
                                class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
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
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                        data-toggle="modal" data-target="#exampleModal-2"
                                                        fdprocessedid="4otim4">+ Agregar nuevo<i></i></button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <table id="products_listing" class="table order-table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Apellidos</th>
                                            <th>N CI</th> 
                                            <th>Correo gmail</th>
                                            <th>N NIT</th>
                                            <th>N celular 1</th>
                                            <th>N celular 2</th>
                                            <th>Ubicación</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td> juan</td>
                                            <td> garcia zuarez</td>
                                            <td>21345678</td>
                                            <td>juan@gemail.com</td>
                                            <td>34567</td>
                                            <td>21345678</td>
                                            <td>2134354678</td>
                                            <td>3satelite norte</td>
                                            <td style="width: 20%;">
                                                <a class="btn btn-outline-warning" href="">
                                                    <i class="fa fa-eye" aria-hidden="true"></i></a>

                                                <a class="btn btn-outline-info" href="" title="Editar"  data-toggle="modal" data-target="#exampleModal-3"
                                                        fdprocessedid="4otim4">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <a href="#" class="btn btn-outline-danger" data-toggle="modal"
                                                    data-target=""><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal EDITAR CLINTES -->
    <div class="modal fade" id="exampleModal-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-3"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel-3">Informacion personal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><B>X</B></span>
                    </button>
                </div>
                <div class="modal-body">
                <div id="partition1" class="container">
    <div class="row">
        <!-- Primera partición -->
        <div class="col-lg-6">
            <form>
            <br>
                <label for="campo1">Nombre:</label>
                <input type="text" id="campo1" name="campo1"><br>

                <label for="campo2">Apellidos:</label>
                <input type="text" id="campo2" name="campo2"><br>

                <label for="campo3">Numero CI:</label>
                <input type="text" id="campo3" name="campo3"><br>

                <label for="campo4">Correo electronico:</label>
                <input type="text" id="campo4" name="campo4"><br>

                <label for="campo5">Numero NIT:</label>
                <input type="text" id="campo5" name="campo5"><br>

                
            </form>
        </div>
        <!-- Segunda partición -->
        <div class="col-lg-6">
            <form>
                
                <br>
                <label for="campo6">Numero celular 1:</label>
                <input type="text" id="campo6" name="campo6"><br>

                <label for="campo7">Numero celular 2:</label>
                <input type="text" id="campo7" name="campo7"><br>

                <label for="campo8">Ubicacion domiciliario:</label>
                <input type="text" id="campo8" name="campo8"><br>

                <label for="campo9">Ingresar URL ubicacion GPS:</label>
                <input type="text" id="campo9" name="campo9"><br>

                
                <br>
                <br>
                <br>
                <button  onclick="qr()" class="btn btn-dark mr-2">Actualizar</button>
                <a href="#" class="btn btn-dark">Cancelar</a>  
                 <a href="https://www.google.com/maps/@-17.6028396,-63.1207562,4216m/data=!3m1!1e3?entry=ttu" class="btn btn-dark">MAPA <i class="fa fa-map-marker" aria-hidden="true"></i>
                </a>       
           <div id="right">
            </form>
           </div>
        </div>
    <!--FIN Modal EDITAR CLINTES -->
    </div>
</div>    
@endsection