@extends('admin.principal')
@section('contenido')
<input type="hidden" id="ruta" value="{{url('/')}}">
    <div class="main-panel">
        <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Datos orden de compra
            </h3>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="card">
                    <div class="card-body">                   
                        <div id="order-listing_wrapper"
                            class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12 ">
                                    <div class="dataTables_length" id="order-listing_length">
                                        <form class="form-inline">
                                            <div>
                                               
                          <input class="form-control" id="buscar" name="buscar" type="text"
                          onkeypress="return soloLetras(event)" placeholder="Buscar por nombre,apellido....." />
                        <a href="" class="btn btn-dark" lass="input-group-text" id="basic-addon1">
                          <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                        <a href="" type="button" class="btn btn-dark" onclick="window.location.href=''">
                          <i class="fas fa-undo-alt"></i>
                        </a>
                                                <a href="{{route('ordeDeCompra.create')}}" class="btn btn-dark ">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i> <b> Agregar nuevo</b>
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-block table-border-style">
                                    <div class="table-responsive"> 
                                    <table class="table table-bordered table-hover">
                                        <thead class="bg-primary">
                                            <th class="text-center" style="color: #fff;">ID</th>
                                            <th class="text-center" style="color: #fff;">PROVEEDOR</th>
                                            <th class="text-center" style="color: #fff;">DESCRIPCION</th>
                                            <th class="text-center" style="color: #fff;">SUCURSAL</th>
                                            <th class="text-center" style="color: #fff;">N. FACTURA</th>
                                            <th class="text-center" style="color: #fff;">FECHA</th>
                                            <th class="text-center" style="color: #fff;">ACCIONES</th>
                                        </thead>
                                        <tbody id="data_persona">
                                            <?php $contador = 1?>
                                            @foreach ($ordenesCompra as $item)
                                              <tr>
                                                <td  class="text-center" scope="row"><?php echo $contador;?></td>
                                           
                                                <td class="text-center">{{$item->NOMBRE_PROVEEDOR}}</td>
                                                <td class="text-center">{{$item->DESCRIPCION}}</td>
                                                <td class="text-center">{{$item->NOMBRE_SURCUSAL}}</td>
                                                <td class="text-center">{{$item->NRO_FACTURA }}</td>
                                                <td class="text-center">{{$item->FECHA}}</td>
                                               
                                                <td style="width: 20%;">
                                                    <center>
                                                    <a class="btn btn-outline-warning" href="{{route('ordeDeCompra.show', $item->COD_COMPRA)}}">
                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    <a class="btn btn-outline-danger" href="#" title="pdf">
                                                        <i class="fa fa-file-pdf"></i></a>
    
                                                    
                                                    </center>
                                                </td>  
                                              </tr>
                                                
                                              <?php  $contador++;?>
                                            @endforeach 
                                          </tbody>
                                      
                                    </table>
                                    </div>     
                        </div>
                        <div class="row">
                        <div class="col-lg-12">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')  

    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Éxito',
                text: '¡La orden de compra se ha guardado exitosamente!',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif 
@endsection