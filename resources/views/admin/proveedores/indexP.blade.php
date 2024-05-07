@extends('layouts.admin')
@section('contenido')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Datos del proveedor</h3>
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
                                            <th>Rason social</th>
                                            <th>Numero CI/NIT</th>
                                            <th>N celular</th>
                                            <th>Correo gmail</th>
                                            <th>Direcion</th>
                                            <th>N cuenta</th>
                                            <th>P contacto</th>
                                            <th>N celular</th>
                                            <th>Observaciones</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td> juan</td>
                                            <td> garcia zuarez</td>
                                            <td> proveedor 1</td>
                                            <td>21345678</td>
                                            <td>21345678</td>
                                            <td>juan@gemail.com</td>
                                            <td>satelite norte</td>
                                            <td>21345678</td>
                                            <td>jona asalvatierra</td>
                                            <td>534657687</td>
                                            <td>ninguna</td>
                                            <td style="width: 20%;">
                                                <a class="btn btn-outline-warning" href="">
                                                    <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="btn btn-outline-info" href="#" title="Editar"
                                                    data-toggle="modal" data-target="#editarProveedorModal">
                                                    <i class="far fa-edit"></i></a>

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
    <!-- Modal EDITAR PROVEEDOR -->
    <div class="modal fade" id="editarProveedorModal" tabindex="-1" role="dialog" aria-labelledby="editarProveedorModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarProveedorModalTitle">Editar proveedor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><B>X</B></span>
                    </button>
                </div>
                <div class="modal-body">

                    <!-- División 1 -->
                    <div id="division1">
                        <form id="infoPersonalForm">
                        <label for="campo1">Nombre:</label>
                                    <input type="text" id="campo1" name="campo1"><br>

                                    <label for="campo2">Apellidos:</label>
                                    <input type="text" id="campo2" name="campo2"><br>

                                    <label for="campo4">Rason social:</label>
                                    <input type="text" id="campo4" name="campo4"><br>
                                  
                                    <label for="campo3">Numero CI /NIT:</label>
                                   <input type="text" id="campo3" name="campo3"><br>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Numero CI
                                        </label>
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Numero NIT
                                        </label>
                                    </div>
                                    <label for="campo7">Numero celular:</label>
                                    <input type="text" id="campo7" name="campo7"><br>

                                    <label for="campo4">Correo electronico:</label>
                                    <input type="text" id="campo4" name="campo4"><br>
                        </form>
                    </div>

                    <!-- División 2 -->
                    <div id="division2">
                        <form id="infoContactoForm">
                        <label for="campo8">Direcion:</label>
                                    <input type="text" id="campo8" name="campo8"><br>

                                    <label for="campo8">Numero de cuenta:</label>
                                    <input type="text" id="campo8" name="campo8"><br>

                                    <label for="campo8">Persona de contacto:</label>
                                    <input type="text" id="campo8" name="campo8"><br>

                                    <label for="campo8">Numero celular:</label>
                                    <input type="text" id="campo8" name="campo8"><br>

                                    <label for="campo8">Observaciones</label>
                                    <input type="text" id="campo8" name="campo8"><br>
                        </form>
                    </div>
                    <div class="derecha">
                        <br>
                        <br>
                        <button onclick="qr()" class="btn btn-dark mr-2">Registrar</button>
                        <a href="#" class="btn btn-dark" data-dismiss="modal">Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin Modal EDITAR PROVEEDOR -->






    <!-- Modal CREAR PROVEEDOR -->
    <div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel-2">Informacion personal</h5>
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
                                    <label for="campo1">Nombre:</label>
                                    <input type="text" id="campo1" name="campo1"><br>

                                    <label for="campo2">Apellidos:</label>
                                    <input type="text" id="campo2" name="campo2"><br>

                                    <label for="campo4">Rason social:</label>
                                    <input type="text" id="campo4" name="campo4"><br>
                                  
                                    <label for="campo3">Numero CI /NIT:</label>
                                   <input type="text" id="campo3" name="campo3"><br>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Numero CI
                                        </label>
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Numero NIT
                                        </label>
                                    </div>
                                    <label for="campo7">Numero celular:</label>
                                    <input type="text" id="campo7" name="campo7"><br>

                                    <label for="campo4">Correo electronico:</label>
                                    <input type="text" id="campo4" name="campo4"><br>
                                </form>
                            </div>
                            <!-- Segunda partición -->
                            <div class="col-lg-6">
                                <form>
                                   
                                    <label for="campo8">Direcion:</label>
                                    <input type="text" id="campo8" name="campo8"><br>

                                    <label for="campo8">Numero de cuenta:</label>
                                    <input type="text" id="campo8" name="campo8"><br>

                                    <label for="campo8">Persona de contacto:</label>
                                    <input type="text" id="campo8" name="campo8"><br>

                                    <label for="campo8">Numero celular:</label>
                                    <input type="text" id="campo8" name="campo8"><br>

                                    <label for="campo8">Observaciones</label>
                                    <input type="text" id="campo8" name="campo8"><br>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="derecha">
                                        <button onclick="qr()" class="btn btn-dark mr-2">Registrar</button>
                                        <a href="#" class="btn btn-dark" data-dismiss="modal">Cancelar</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Modal CREAR PROVEEDOR -->
                        @endsection

