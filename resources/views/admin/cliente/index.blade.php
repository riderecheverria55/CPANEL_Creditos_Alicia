@extends('layouts.admin')
@section('title', 'Informacion de clientes')

@section('contenido')
<style>
    @import url("https://fonts.googleapis.com/css2?family=Baloo+Tamma+2&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Baloo Tamma 2", cursive;
}



/* left part*/

#left {
  display: flex;
  justify-content: flex-start;
  align-items: center;
  flex-direction: column;
  width: 25rem;
  height: 25rem;
}
#in {
  display: flex;
  flex-direction: column;
}

p {
  color: black;
  text-align: center;
  letter-spacing: 1px;
  font-size: 25px;
  padding: 60px 0;
  font-weight: 800;
  text-transform: uppercase;
  text-decoration: #feb101 3px solid underline;
  text-underline-position: under;
}

/* Input Type */

#text {
  margin-bottom: 30px;
  font-size: large;
  padding: 5px 25px 0 10px;
  font-weight: 600;
  letter-spacing: 1px;
}

input::placeholder {
  font-weight: 500;
  font-size: large;
}
/* Button */

i {
  margin-right: 8px;
  font-weight: 700;
}
button {
  padding: 5px 0;
  border: none;
  color: black;
  border-radius: 5px;
  background: #feb101;
  font-size: 18px;
  font-weight: 800;
  cursor: pointer;
}
button:hover {
  background: black;
  color: #feb101;
}
button:active {
  transform: translateY(4px);
}

/* Right part */

#right {
  background: #feb101;
  width: 25rem;
  height: 25rem;
  display: flex;
  align-items: center;
  justify-content: center;
}

</style>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Datos de clientes
            </h3>
        </div>
        <div class="row">
            <div class="col-12">
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
                                                        <th>Apellido P</th>
                                                        <th>Apellido M</th>
                                                        <th>N CI</th>
                                                        <th>Rason social</th>
                                                        <th>N NIT</th>
                                                        <th>N celular 1</th>
                                                        <th>N celular 2</th>
                                                        <th>Correo gmail</th>
                                                        <th>Ubicación</th>
                                                        <th>Imagen QR</th>
                                                        <th>Acciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td> juan</td>
                                                        <td>  zuarez</td>
                                                        <td> garcia</td>
                                                        <td>3456768 </td>
                                                        <td>registro </td>
                                                        <td>34567</td>
                                                        <td>21345678</td>
                                                        <td>2134354678</td>
                                                        <td>juan@gemail.com</td>
                                                        <td>santa cruz</td>
                                                        <td> <img src="../imagenes/imagen_qr.png" alt="sample"
                                                        class="rounded mw-200"></td>
                                                        <td style="width: 20%;">
                                                           <a class="btn btn-outline-warning"  href="">
                                                            <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                            <a class="btn btn-outline-info" href="" title="Editar">
                                                                <i class="far fa-edit"></i>
                                                            </a>

                                                            <a href="#" class="btn btn-outline-danger"
                                                                data-toggle="modal" data-target=""><i
                                                                    class="far fa-trash-alt"></i></a>
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
