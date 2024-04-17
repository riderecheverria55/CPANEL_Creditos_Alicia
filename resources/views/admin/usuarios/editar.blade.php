@extends('layouts.admin')
@section('title', 'Informacion de Home')
@section('contenido')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Editar usuario
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
                                    <div class="row">
          
                                    <div class="card-body">  
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group row">
                                              <div class="col-sm-9">
                                                <h6>Nombre</h6>
                                                  <input type="text" name="name" id="name" class="form-control" 
                                                  placeholder="Escriba un nombre" required onkeypress="return soloLetras(event)" />
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="form-group row">
                                                <div class="col-sm-9">
                                                  <h6>Correo electronico</h6>
                                                    <input type="email" class="form-control" name="email" id="email"  aria-describedby="emailHelpId"
                                                     placeholder="Escriba un gmail valido" required >
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group row">
                                              <div class="col-sm-9">
                                                <h6>Contraseña</h6>
                                                <input type="password" class="form-control" name="password" placeholder="Contraseña">     
                                                  <span class="error text-danger" for="input-password"></span>         
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <label for="roles" class="col-sm-2 col-form-label">Roles</label>
                                          <div class="col-sm-7">
                                              <div class="form-group">
                                                  <div class="tab-content">
                                                      <div class="tab-pane active">
                                                          <table class="table">
                                                              <tbody>
                                                                  <tr>
                                                                      <td>
                                                                          <div class="form-check">
                                                                              <label class="form-check-label">
                                                                                  <input class="checkbox" type="checkbox" name="roles[]"
                                                                                      value="" >                                                                               
                                                                              </label>
                                                                          </div>
                                                                      </td>
                                                                      <td>
                                                                        admin       
                                                                      </td>
                                                                  </tr> 
                                                              </tbody>
                                                          </table>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          </div>
                                        <br/>  
                                        <button type="submit" class="btn btn-dark mr-2">Actualizar</button>
                                        <a href="" class="btn btn-dark mr-2"> Cancelar</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
@endsection
@section('scripts')

@endsection