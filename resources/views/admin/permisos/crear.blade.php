@extends('layouts.admin')
@section('title', 'Registro de permisos')

@section('contenido')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Crear roles
            </h3>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <div class="col-sm-9">
                                                        <h6>Nombre</h6>
                                                        <input type="text" name="name" id="name" class="form-control"
                                                            placeholder="Escriba un nombre" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br />
                                        <button type="submit" class="btn btn-dark mr-2">Registrar</button>
                                        <a href="" class="btn btn-dark mr-2"> Cancelar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                </div>
                            </div>       
@endsection






