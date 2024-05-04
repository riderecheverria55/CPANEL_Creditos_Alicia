
@extends('layouts.admin')
@section('title', 'Informacion de clientes')

@section('contenido')

<div class="main-panel">          
    <div class="content-wrapper">
      <div class="page-header">
      <h3 class="page-title">
              Registro de clientes
            </h3>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="card">
                <div class="card-body">
                  <!-- Font Awesome -->
<div id="partition1" class="container">
    <div class="row">
        <!-- Primera partición -->
        <div class="col-lg-6">
            <h3 class="page-title">Informacion personal</h3>
            <br>
            <form>
            <br>
                <label for="campo1">Nombre:</label>
                <input type="text" id="campo1" name="campo1"><br>

                <label for="campo2">Apellido paterno:</label>
                <input type="text" id="campo2" name="campo2"><br>

                <label for="campo3">Apellido materno:</label>
                <input type="text" id="campo3" name="campo3"><br>

                <label for="campo4">Numero CI:</label>
                <input type="text" id="campo4" name="campo4"><br>

                <label for="campo5">Razon social:</label>
                <input type="text" id="campo5" name="campo5"><br>

                <label for="campo6">Numero NIT:</label>
                <input type="text" id="campo6" name="campo6"><br>
            </form>
        </div>
        <!-- Segunda partición -->
        <div class="col-lg-6">
            <form>
                <br>
                <br>
                <br>
                <label for="campo7">Numero celular 1:</label>
                <input type="text" id="campo7" name="campo7"><br>

                <label for="campo8">Numero celular 2:</label>
                <input type="text" id="campo8" name="campo8"><br>

                <label for="campo9">Correo electronico:</label>
                <input type="text" id="campo9" name="campo9"><br>

                <label for="campo10">Ubicacion domiciliario:</label>
                <input type="text" id="campo10" name="campo10"><br>

                <label for="campo11">Ingresar URL ubicacion GPS:</label>
                <input type="text" name=""  id="text" placeholder="Ingrese URL de google map"  required><br>
            

                <br>
                <button  onclick="qr()" class="btn btn-dark mr-2">Registrar</button>
                <a href="#" class="btn btn-dark">Cancelar</a>  <a href="https://www.google.com/maps/@-17.6028396,-63.1207562,4216m/data=!3m1!1e3?entry=ttu" class="btn btn-dark">Google map</a>
           <!-- IMAGEN QR-->
           <div id="right">
            <div id="image">
                <img
                    src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=https://www.facebook.com/CreditosAlicia"
                    alt=""
                />
            </div>
            </form>

            
        </div>

        </div>
    </div>
</div>








<!-- CODIGO GENERADOR DE QR -->

<!--
<div id="partition2">
<h3 class="page-title">
Generador de código QR
            </h3>
    <div id="container">
        <div id="left">
            <div id="in">
            
            <label for="campo8">Ingresar URL ubicacion GPS:</label>
        <input type="text" name=""  id="text" placeholder="Ingrese URL de google map"  required><br>
                <button  onclick="qr()" class="btn btn-dark mr-2">Generar Código QR</button>
                
            </div>
        </div>
        <div id="right">
            <div id="image">
                <img
                    src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=https://www.facebook.com/CreditosAlicia"
                    alt=""
                />
            </div>
        </div>
    </div>
</div> -->

<div class="clear"></div>
                <div class="row">  
            <div class="col-lg-12">
        </div>
        
    </div>
@endsection