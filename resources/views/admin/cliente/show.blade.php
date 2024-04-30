@extends('admin.principal')
@section('contenido')
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
                        <strong><b>Apellidos</b></strong>
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
                <img src="{{ asset('imagenes/qr/' . $clientes->IMAGEN_QR) }}" class="rounded mw-100" alt="Código QR">
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