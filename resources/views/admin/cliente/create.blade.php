@extends('admin.principal')
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
            <form action="{{ route('clientes.store') }}" method="POST">
                @csrf
            <br>
                <label for="campo1">Nombre:</label>
                <input type="text" id="campo1" name="nombre" required><br>

                <label for="campo2">Apellidos</label>
                <input type="text" id="campo2" name="apellido" required><br>

                <label for="campo3">Celular :</label>
                <input type="text" id="campo3" name="celular" required><br>

                <label for="campo4">Celular 2:</label>
                <input type="text" id="campo4" name="celular_2"><br>
            
        </div>
        <!-- Segunda partición -->
        <div class="col-lg-6">
        <br>
        <br>
        <br>
                <label for="campo5">Direccion:</label>
                <input type="text" id="campo5" name="direccion" required><br>

                <label for="campo6">Ingresar URL ubicacion GPS:</label>
                <input type="text" id="campo6" name="url" required><br>
                <label for="campo7">Nit:</label>
                <input type="text" id="campo7" name="nit" ><br>
            
                <br>
                <br>
                <br>
                <br>
                <button type="submit" onclick="qr()" class="btn btn-dark mr-2">Registrar</button>
            </form action="{{ route('clientes.store') }}" method="POST">
                <a href="{{route('clientes.index')}}" class="btn btn-dark">Cancelar</a>  
                <a href="https://www.google.com/maps/@-17.6028396,-63.1207562,4216m/data=!3m1!1e3?entry=ttu" class="btn btn-dark" target="_blank">Mapa GPS  <i class="fa fa-map"></i></a> 
                

           <!-- IMAGEN QR-->
          
        </div>

        </div>
    </div>
</div>
<div class="clear"></div>
                <div class="row">  
            <div class="col-lg-12">
        </div>
        
    </div>
@endsection