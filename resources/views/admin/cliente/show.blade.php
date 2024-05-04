@extends('admin.principal')
@section('contenido')
<style>
    /* Estilos para la plantilla */
    .container {
        margin-top: 50px;
    }
    
    .border-bottom {
        border-bottom: 1px solid #dee2e6;
    }
    
    .text-center {
        text-align: center;
    }
    
    .mb-3 {
        margin-bottom: 1rem;
    }
    
    .mt-3 {
        margin-top: 1rem;
    }
    
    .mb-4 {
        margin-bottom: 1.5rem;
    }
    
    .mb-lg-0 {
        margin-bottom: 0;
    }
    
    .pb-4 {
        padding-bottom: 1.5rem;
    }
    
    .pb-lg-6 {
        padding-bottom: 6rem;
    }
    
    .rounded {
        border-radius: 0.25rem;
    }
    
    .card-footer {
        padding: 0.75rem 1.25rem;
        background-color: #f8f9fa;
        border-top: 1px solid #dee2e6;
    }
    
    .float-right {
        float: right !important;
    }
    
    /* Estilos para los íconos */
    .fa {
        margin-right: 0.5rem;
    }
    
    /* Estilos para el contenido de la tarjeta */
    .list-unstyled {
        padding-left: 0;
        list-style: none;
    }
    
    .list-unstyled li {
        padding: 0.5rem 0;
    }
    
    .list-unstyled strong {
        margin-right: 0.5rem;
    }
    
    /* Estilos para la imagen QR */
    .mw-100 {
        max-width: 100%;
        height: auto;
    }
</style>
<div class="main-panel">          
    <div class="content-wrapper">
      <div class="page-header">
      <h3 class="page-title">
              Datos de cliente
            </h3>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="card">
                <div class="card-body">
                <div class="row">
                <div class="container">
    <div class="row">
        <!-- Información del cliente -->
        <div class="col-lg-7 mb-4 mb-lg-0">
            <div class="">
                <h4 class="text-center mb-3">Información del cliente</h4>
                <ul class="list-unstyled">
                    <li>
                        <i class="fa fa-user"></i>
                        <strong><b>Nombre:</b></strong>
                        <span class="text-muted">{{$clientes->NOMBRE}}</span>
                    </li>
                    <li>
                        <i class="fa fa-user"></i>
                        <strong><b>Apellido</b></strong>
                        <span class="text-muted">{{$clientes->APELLIDO}}</span>
                    </li>
                   
                    <li>
                        <i class="fa fa-id-card"></i>
                        <strong><b>Número de NIT:</b></strong>
                        <span class="text-muted">{{$clientes->NIT}}</span>
                    </li>
                    
                    
                    <li>
                        <i class="fa fa-phone-square"></i>
                        <strong><b>Número celular 1:</b></strong>
                        <span class="text-muted">{{$clientes->CELULAR}}</span>
                    </li>
                    <li>
                        <i class="fa fa-phone-square"></i>
                        <strong><b>Número celular 1:</b></strong>
                        <span class="text-muted">{{$clientes->CELULAR_2}}</span>
                    </li>
                    
                    <li>
                        <i class="fa fa-map"></i>
                        <strong><b>DIRECCION:</b></strong>
                        <span class="text-muted">{{$clientes->DIRECCION}}</span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Ubicacion QR -->
        <div class="col-lg-5">
            <div class="text-center pb-4">
                <img src="{{ asset('imagenes/qr/' . $clientes->IMAGEN_QR) }}" style="width: 200px;" class="rounded mw-100" alt="Código QR">
                {{-- //<img src="../imagenes/imagen_qr.png" alt="sample" class="rounded mw-100"> --}}
                <h4 class="mt-3">Ubicación QR</h4>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <a href="{{route('clientes.index')}}" class="btn btn-dark float-right">Regresar</a>
        </div>
    </div>
</div>
        <div class="row">  
        <div class="col-lg-12">
    </div>
</div>
@endsection