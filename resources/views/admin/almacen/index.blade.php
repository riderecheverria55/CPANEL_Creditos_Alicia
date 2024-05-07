@extends('admin.principal')
@section('contenido')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Datos de almacen</h3>
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
                                                        data-toggle="modal" data-target="#exampleModal-3"
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
                                            <th>Sucursal</th>
                                            <th>Ubicación</th>
                                            <th>Numero celular</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td> almacen central</td>
                                            <td> creditos alicia central</td>
                                            <td>ubanizacion pentaguazu 1</td>
                                            <td> 715656555</td>
                                            <td style="width: 20%;">
                                            <a class="btn btn-outline-info" href="#" title="Editar" data-toggle="modal" data-target="#editModal">
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
 <!-- Modal EDITAR ALMACEN -->
 <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar almacen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><b>X</b></span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Similar content as the original modal, adjusted for editing -->
                <div id="editDivision">
                    <form id="editInfoContactoForm">
                            <label for="campo5">Nombre:</label>
                            <input type="text" id="campo5" name="campo5"><br>

                            <label for="campo8">Seleccionar sucursal:</label>
                            <select>
                            <option>Sucursal 1</option>
                            <option>Sucursal 2</option>
                            <option>Sucursal 3</option>
                            </select>

                            <label for="campo7">Direccion:</label>
                            <input type="text" id="campo7" name="campo7"><br>

                            <label for="campo7">Numero celular:</label>
                            <input type="text" id="campo7" name="campo7"><br>
                    </form>
                </div>
                <div class="derecha">
                    <br>
                    <br>
                    <button onclick="update()" class="btn btn-dark mr-2">Actualizar</button>
                    <a href="#" class="btn btn-dark" data-dismiss="modal">Cancelar</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FIN Modal EDITAR ALMACEN -->


   <!-- Modal CREAR ALMACEN -->
    <div class="modal fade" id="exampleModal-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-3"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel-3">Agregar almacen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><b>X</b></span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- División 2 -->
                    <div id="division3">
                        <form id="infoContactoForm">                            
                            <label for="campo5">Nombre:</label>
                            <input type="text" id="campo5" name="campo5"><br>

                            <label for="campo8">Seleccionar sucursal:</label>
                            <select>
                            <option>Sucursal 1</option>
                            <option>Sucursal 2</option>
                            <option>Sucursal 3</option>
                            </select>

                            <label for="campo7">Direccion:</label>
                            <input type="text" id="campo7" name="campo7"><br>

                            <label for="campo7">Numero celular:</label>
                            <input type="text" id="campo7" name="campo7"><br>
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
     <!--FIN Modal CREAR ALMACEN -->
      


@endsection