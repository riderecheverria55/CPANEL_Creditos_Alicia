@extends('layouts.admin')
@section('title', 'Informacion del cliente')
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
                        <span class="text-muted">Juan</span>
                    </li>
                    <li>
                        <i class="fa fa-user"></i>
                        <strong><b>Apellido P:</b></strong>
                        <span class="text-muted">Zuárez</span>
                    </li>
                    <li>
                        <i class="fa fa-user"></i>
                        <strong><b>Apellido M:</b></strong>
                        <span class="text-muted">Garcia</span>
                    </li>
                    <li>
                        <i class="fa fa-id-card"></i>
                        <strong><b>Número de CI:</b></strong>
                        <span class="text-muted">35465758790</span>
                    </li>
                    <li>
                        <i class="fa fa-id-card"></i>
                        <strong><b>Número de NIT:</b></strong>
                        <span class="text-muted">3546575844790</span>
                    </li>
                    <li>
                        <i class="fa fa-id-card"></i>
                        <strong><b>Rason social:</b></strong>
                        <span class="text-muted">registro</span>
                    </li>
                    
                    <li>
                        <i class="fa fa-phone-square"></i>
                        <strong><b>Número celular 1:</b></strong>
                        <span class="text-muted">352345678</span>
                    </li>
                    <li>
                        <i class="fa fa-phone-square"></i>
                        <strong><b>Número celular 1:</b></strong>
                        <span class="text-muted">352345678</span>
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i>
                        <strong><b>Correo electrónico:</b></strong>
                        <span class="text-muted">juan@gmail.com</span>
                    </li>
                    <li>
                        <i class="fa fa-map"></i>
                        <strong><b>Ubicación:</b></strong>
                        <span class="text-muted">Santa Cruz</span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Ubicacion QR -->
        <div class="col-lg-5">
            <div class="text-center pb-4">
                <img src="../imagenes/imagen_qr.png" alt="sample" class="rounded mw-100">
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
            <a href="#" class="btn btn-dark float-right">Regresar</a>
        </div>
    </div>
</div>
        <div class="row">  
        <div class="col-lg-12">
    </div>
</div>
 @endsection
