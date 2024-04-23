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

                  <style>
        /* Estilos base para las particiones */
        #partition1, #partition2 {
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #f8f9fa; /* Color de fondo */
        }

        /* Estilos para las particiones en pantallas grandes */
        @media only screen and (min-width: 768px) {
            #partition1 {
                float: left;
                width: 50%;
                background-color: #f0f0f0;
            }

            #partition2 {
                float: left;
                width: 50%;
                background-color: #e0e0e0;
            }
        }

        /* Estilos para las particiones en pantallas pequeñas */
        @media only screen and (max-width: 767px) {
            #partition1, #partition2 {
                float: none;
                width: 100%;
                background-color: inherit;
            }
        }

     

        /* Estilos para los formularios */
        form {
            margin-bottom: 0;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: calc(100% - 10px);
            padding: 4px;
            margin-bottom: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff; /* Color de fondo del botón */
            color: white; /* Color del texto del botón */
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3; /* Cambio de color al pasar el mouse */
        }

        /* Estilos para el generador de código QR */
        #container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #left {
            flex: 1;
            padding: 20px;
            text-align: center;
        }

        #right {
            flex: 1;
            padding: 20px;
            text-align: center;
        }

        #image img {
            max-width: 100%;
            height: auto;
        }
       
    </style>

<div id="partition1" class="container">
    <div class="row">
        <!-- Primera partición -->
        <div class="col-lg-6">
            <h3 class="page-title">Informacion personal</h3>
            <br>
            <form action="{{ route('clientes.update',$clientes->COD_CLIENTE) }}" method="POST"method="POST">
                @csrf
                @method('PUT')
                <input type="text" name="cod_persona" value="{{$clientes->COD_CLIENTE}}" hidden >
            <br>
                <label for="campo1">Nombre:</label>
                <input type="text" id="campo1" value="{{$clientes->NOMBRE}}" name="nombre" required><br>

                <label for="campo2">Apellido</label>
                <input type="text" id="campo2" value="{{$clientes->APELLIDO}}" name="apellido" required><br>

                <label for="campo3">Celular :</label>
                <input type="text" id="campo3" value="{{$clientes->CELULAR}}" name="celular" required><br>

                <label for="campo4">Celular 2:</label>
                <input type="text" value="{{$clientes->CELULAR_2}}" id="campo4" name="celular_2"><br>

                <label for="campo5">Direccion:</label>
                <input type="text" id="campo5" value="{{$clientes->DIRECCION}}" name="direccion" required><br>

                <label for="campo6">Ingresar URL ubicacion GPS:</label>
                <input type="text" id="campo6" value="{{$clientes->URL_DIRECCION}}" name="url" required><br>
            
        </div>
        <!-- Segunda partición -->
        <div class="col-lg-6">
           
                <br>
                <br>
                <br>
                <label for="campo7">Nit:</label>
                <input type="text" id="campo7" name="nit" value="{{$clientes->NIT}}" ><br>
            
                <br>
                <button type="submit" onclick="qr()" class="btn btn-dark mr-2">Registrar</button>
            </form action="{{ route('clientes.store') }}" method="POST">
                <a href="{{route('clientes.index')}}" class="btn btn-dark">Cancelar</a>  
                <a href="https://www.google.com/maps/@-17.6028396,-63.1207562,4216m/data=!3m1!1e3?entry=ttu" class="btn btn-dark" target="_blank">Google Map</a>

           <!-- IMAGEN QR-->
          
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