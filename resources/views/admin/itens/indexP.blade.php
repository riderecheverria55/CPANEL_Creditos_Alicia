@extends('layouts.admin')
@section('contenido')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Datos de itens</h3>
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
                                                        fdprocessedid="4otim4"><b>+</b> Agregar
                                                        itens<i></i></button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <table id="products_listing" class="table order-table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Categoria</th>
                                            <th>Subcategoria</th>
                                            <th>Codigo</th>
                                            <th>Codigo de fabrica</th>
                                            <th>Unidad de medida</th>
                                            <th>Descripcion</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td> tecnologia</td>
                                            <td> televisores</td>
                                            <td> 445454</td>
                                            <td>21345678</td>
                                            <td>2 unidades</td>
                                            <td>ninguna</td>
                                            <td style="width: 20%;">
                                                <a class="btn btn-outline-warning" href="">
                                                    <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="btn btn-outline-info" href="#" title="Editar"
                                                    data-toggle="modal" data-target="#editaritensModal">
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
    <!-- Modal EDITAR itens -->
    <div class="modal fade" id="editaritensModal" tabindex="-1" role="dialog" aria-labelledby="editaritensModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editaritensModalTitle">Editar itens</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><B>X</B></span>
                    </button>
                </div>
                <div class="modal-body">

                    <!-- División 1 -->
                    <div id="division1">
                        <form id="infoPersonalForm">
                            <label for="campo8">Seleccionar categoria:</label>
                            <select>
                                <option>Tecnologia</option>
                                <option>Linea blanca</option>
                                <option>Motosicletas</option>
                            </select>
                            <label for="campo4">Codigo:</label>
                            <input type="text" id="campo4" name="campo4"><br>

                            <label for="campo8">Descripcion</label>
                            <input type="text" id="campo8" name="campo8"><br>
                        </form>
                    </div>

                    <!-- División 2 -->
                    <div id="division2">
                        <form id="infoContactoForm">
                            <label for="campo8">Seleccionar subcategoria:</label>
                            <select>
                                <option>Motos urbanas</option>
                                <option>Motos para trabajo</option>
                                <option>Motos para distancias largas</option>
                                <option>Motos para el campo</option>
                                <option>Motos para correr</option>
                            </select>

                            <label for="campo8">Codigo de fabrica:</label>
                            <input type="text" id="campo8" name="campo8"><br>

                            <label for="campo8">Seleccionar unidad de medida:</label>
                            <select>
                                <option>1 unidad</option>
                                <option>2 unidad</option>
                                <option>3 unidad</option>
                            </select>
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
    <!-- fin Modal EDITAR itens-->






    <!-- Modal CREAR itens -->
    <div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel-2">Agregar items</h5>
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
                                    <label for="campo8">Seleccionar categoria:</label>
                                    <select>
                                        <option>Tecnologia</option>
                                        <option>Linea blanca</option>
                                        <option>Motosicletas</option>
                                    </select>
                                    <label for="campo4">Codigo:</label>
                                    <input type="text" id="campo4" name="campo4"><br>

                                    <label for="campo8">Descripcion</label>
                                    <input type="text" id="campo8" name="campo8"><br>
                                </form>
                            </div>
                            <!-- Segunda partición -->
                            <div class="col-lg-6">
                                <form>

                                    <label for="campo8">Seleccionar subcategoria:</label>
                                    <select>
                                        <option>Motos urbanas</option>
                                        <option>Motos para trabajo</option>
                                        <option>Motos para distancias largas</option>
                                        <option>Motos para el campo</option>
                                        <option>Motos para correr</option>
                                    </select>

                                    <label for="campo8">Codigo de fabrica:</label>
                                    <input type="text" id="campo8" name="campo8"><br>

                                    <label for="campo8">Seleccionar unidad de medida:</label>
                                    <select>
                                        <option>1 unidad</option>
                                        <option>2 unidad</option>
                                        <option>3 unidad</option>
                                    </select>
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
                        <!-- Modal CREAR itens -->
                        @endsection