@extends('layouts.admin')
@section('title', 'Gestion de roles')
@section('contenido')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Editar roles
            </h3>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-lg-12 ">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <div class="col-sm-9">
                                                        <h6>Nombre de rol</h6>
                                                        <input type="text" value="" name="name" id="name"
                                                            class="form-control" placeholder="Escriba un rol"
                                                            required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <div class="col-sm-9">
                                                        <h6>Buscar permisos</h6>
                                                        <input class="form-control mr-sm-2 light-table-filter"
                                                            data-table="order-table" type="text"
                                                            placeholder="Busqueda por nombre"
                                                            onkeypress="return soloLetras(event)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="tab-pane active" id="profile">
                                                            <table class="table order-table ">
                                                                <tbody>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <label class="form-check-label">
                                                                                    <input class="checkbox"
                                                                                        type="checkbox"
                                                                                        name="permissions[]" value="">
                                                                                </label>
                                                                            </div>
                                                                        </td>
                                                                        <td>

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
                                <br />
                                <button type="submit" class="btn btn-dark mr-2">Actualizar</button>
                                <a href="" class="btn btn-dark mr-2"> Cancelar</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                    </div>
                  </div>

@endsection
