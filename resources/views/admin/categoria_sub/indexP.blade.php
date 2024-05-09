@extends('admin.principal')
@section('contenido')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Datos de categoria y subcategoria</h3>
        </div>
   
   <!--TABLA CATEGORIA-->
        <div class="row">
            <div class="col-6">
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
                                                    <input class="form-controlr mr-sm-3 light-table-filter"
                                                    data-table="order-table" type="text"
                                                    placeholder="Busqueda por nombre"
                                                    onkeypress="return soloLetras(event)">
                                                    <a href="" class="btn btn-dark">
                                                        <i class="fas fa-undo-alt"></i>
                                                    </a>
                                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#agregarModalCategoria">+ Agregar categoria</button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <table id="products_listing" class="table order-table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td> tecnologo</td>  
                                            <td style="width: 20%;">
                                                <a class="btn btn-outline-info" href="#" title="Editar" data-toggle="modal" data-target="#editarModalCategoria">
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
 <!--FINTABLA CATEGORIA-->
 



  <!--TABLA SUB_CATEGORIA-->
            <div class="col-6">
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
                                                   <div>
                                                    <input class="form-controld mr-sm-3 light-table-filter"
                                                    data-table="order-table" type="text"
                                                    placeholder="Busqueda por nombre"
                                                    onkeypress="return soloLetras(event)">
                                                    <a href="" class="btn btn-dark">
                                                        <i class="fas fa-undo-alt"></i>
                                                    </a>
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                    data-toggle="modal" data-target="#crearmodalsub"
                                                    fdprocessedid="4otim4">+ Agregar subcategoria<i></i></button>
                                                   </div>
                                                   
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <table id="products_listing" class="table order-table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td> tecnologo</td>  
                                            <td style="width: 20%;">
                                            <a class="btn btn-outline-info" href="#" title="Editar" data-toggle="modal" data-target="#editarmodalsubcategoria">
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
              <!--FIN TABLA SUB_CATEGORIA-->
        </div>
    </div>


    
<!-- Modal Agregar Categoría -->
<div class="modal fade" id="agregarModalCategoria" tabindex="-1" role="dialog" aria-labelledby="agregarModalCategoriaTitle" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="agregarModalCategoriaTitle">Crear Categoría</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><b>X</b></span>
                </button>
            </div>
            <div class="modal-body">
                <form id="agregarCategoriaForm">
                    <div class="form-group">
                        <label for="campo6">Nombre:</label>
                            <input type="text" id="campo6" name="campo6"  placeholder="Escribe la categoria"><br>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" onclick="agregarCategoria()">Registrar</button>
                <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<!-- Fin Modal Agregar Categoría -->
<!-- Modal Editar Categoría -->
<div class="modal fade" id="editarModalCategoria" tabindex="-1" role="dialog" aria-labelledby="editarModalCategoriaTitle" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarModalCategoriaTitle">Editar Categoría</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><b>X</b></span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editarCategoriaForm">
                    <div class="form-group">
                        <label for="campo6">Nombre:</label>
                            <input type="text" id="campo6" name="campo6"><br>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" onclick="editarCategoria()">Actualizar</button>
                <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<!-- Fin Modal Editar Categoría -->










 <!-- Modal EDITAR subcategoria -->
 <div class="modal fade" id="editarmodalsubcategoria" tabindex="-1" role="dialog" aria-labelledby="editarmodalsubcategoria" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarmodalsubcategoriaTitle">Editar Subcategoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><b>X</b></span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Similar content as the original modal, adjusted for editing -->
                <div id="editDivision">
                    <form id="infoContactoForm">
                            
                            <label for="campo5">Nombre:</label>
                            <input type="text" id="campo5" name="campo5"><br>
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
<!-- FIN Modal EDITAR subcategoria -->
   <!-- Modal CREAR subcategoria -->
    <div class="modal fade" id="crearmodalsub" tabindex="-1" role="dialog" aria-labelledby="crearmodalsub"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarmodalsubcategoriaTitle">Crear Subcategoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><b>X</b></span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- División 2 -->
                    <div id="division3">
                        <form id="infoContactoForm">
                            
                            <label for="campo5">Nombre:</label>
                            <input type="text" id="campo5" name="campo5"  placeholder="Escribe la subcategoria"><br>
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
     <!--FIN Modal CREAR subcategoria -->
@endsection
      




