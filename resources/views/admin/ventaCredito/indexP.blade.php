@extends('admin.principal')
@section('contenido')
    <style>
    
        .modal-content {
            border-radius: 0.5rem;
        }
        .form-control:read-only {
            background-color: #f8f9fa;
        }
        .modal .modal-dialog .modal-content .modal-body {
            padding: 25px 45px;
        }
        @media (min-width: 768px) {
            .col-md-6 {
                flex: 0 0 40%;
                max-width: 25%;
            }
        }    
    </style>
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
            Venta al credito
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
                                                <input class="form-control mr-sm-2 light-table-filter"
                                                    data-table="order-table" type="text"
                                                    placeholder="Busqueda por nombre"
                                                    onkeypress="return soloLetras(event)">
                                                <a href="" class="btn btn-dark">
                                                    <i class="fas fa-undo-alt"></i>
                                                </a>
                                                <a href="{{route('credito.create')}}" class="btn btn-dark ">
                                                    + Agregar nuevo
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
                                              <th class="text-center" style="color: #fff;">CLIENTE</th>
                                              <th class="text-center" style="color: #fff;">TIPO CUOTA</th>
                                              <th class="text-center" style="color: #fff;">N. CUOTAS</th>
                                              <th class="text-center" style="color: #fff;">CREDITO TOTAL</th>
                                              <th class="text-center" style="color: #fff;">ESTADO</th>
                                              <th class="text-center" style="color: #fff;">ACCIONES</th>
                                          </thead>
                                          <tbody>
                                            <?php $contador = 1?>
                                            @foreach ($resultados  as $item)
                                            <tr>
                                              <td class="text-center" scope="row">
                                                <?php echo $contador;?>
                                              </td>
                                              <td class="text-center">{{$item->NOMBRE}} {{$item->APELLIDO}}</td>
                                              <td class="text-center">{{$item->TIPO_CICLO }}</td>
                                              <td class="text-center">{{$item->N_CUOTAS }}</td>
                                              <td class="text-center">{{$item->PRECIO_CREDITO }}</td>
                                              <td>
                                                @if ($item->ESTADO == 1)
                                                    <span class="badge badge-danger">Pendiente</span>
                                                @elseif ($item->ESTADO == 2)
                                                    <span class="badge badge-success">Cancelado</span>
                                                @else
                                                    <span class="badge badge-secondary">Desconocido</span>
                                                @endif
                                            </td>
                                              <td style="width: 20%;">
                                                <center>
                                                    <a class="btn btn-outline-danger" href="#" title="pdf">
                                                        <i class="fa fa-file-pdf"></i>
                                                    </a>
                                                    @if ($item->ESTADO == 1)
                                                        <a class="btn btn-outline-info" href="{{ route('credito.pagar', $item->COD_CREDITO) }}" title="Pagar">PAGAR
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                    @else
                                                        <a class="btn btn-outline-info disabled" href="#" title="Pagar">PAGAR
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                    @endif
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
                text: '¡Credito creado con exito..',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif 
@endsection