@extends('admin.principal')
@section('contenido')
<input type="hidden" id="ruta" value="{{url('/')}}">

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Datos de caja</h3>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="dataTables_length" id="order-listing_length">
                      <form class="form-inline">
                        <div>

                          <input class="form-control" id="buscar" name="buscar" type="text"
                            onkeypress="return soloLetras(event)" placeholder="Codigo...." />
                          <a href="" class="btn btn-dark" lass="input-group-text" id="basic-addon1">
                            <i class="fa fa-search" aria-hidden="true"></i>
                          </a>
                          <a href="" type="button" class="btn btn-dark" onclick="window.location.href=''">
                            <i class="fas fa-undo-alt"></i>
                          </a>
                          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                            data-target="#exampleModal-3" fdprocessedid="4otim4"><i class="fa fa-plus-circle fa-lg"
                              aria-hidden="true"></i> <b> Agregar nuevo</b><i></i></button>
                        </div>
                    </div>
                  </div>
                </div>
                <br>
                <div class="card-block table-border-style">
                  <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="table">
                      <thead class="bg-primary">

                        <tr>
                          <th class="text-center" style="color: #fff;">ID</th>
                          <th class="text-center" style="color: #fff;">CODIGO</th>
                          <th class="text-center" style="color: #fff;">USUARIO</th>
                          <th class="text-center" style="color: #fff;">FECHA</th>
                          <th class="text-center" style="color: #fff;">CANTIDAD INICIAL</th>
                          <th class="text-center" style="color: #fff;">ESTADO</th>
                          <th class="text-center" style="color: #fff;">ACCIONES</th>
                        </tr>
                      </thead>
                      <tbody id="data_persona">
                        @php $contador = 1; @endphp
                        @foreach ($cajas as $item)
                        <tr>
                            <td class="text-center" scope="row">
                                {{ $contador }}
                            </td>
                            <td class="text-center">{{ $item->CODIGO }}</td>
                            <td class="text-center">{{ $item->NOMBRE }} {{ $item->APELLIDO }}</td>
                            <td class="text-center">{{ $item->FECHA }}</td>
                            <td class="text-center">{{ $item->MONTO_INICIAL }}</td>
                            <td class="text-center">
                                @if ($item->ESTADO == 1)
                                    <span class="badge badge-success">ABIERTO</span>
                                @else
                                    <span class="badge badge-danger">CERRADO</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <center>
                                    @if ($item->ESTADO == 1)
                                        <a class="btn btn-outline-danger" href="#" title="Editar" data-toggle="modal"
                                           data-target="#editModal{{$item->COD_CAJA}}">Cerrar de caja
                                           <i class="far fa-edit"></i>
                                        </a>
                                    @else
                                        <a class="btn btn-outline-danger disabled" href="#" title="Editar" aria-disabled="true">Cerrar de caja
                                           <i class="far fa-edit"></i>
                                        </a>
                                    @endif
                                    <a class="btn btn-outline-danger"  href="{{ route('caja.pdf', $item->COD_CAJA) }}"
                                      target="_blank" title="pdf">
                                      <i class="fa fa-file-pdf"></i>
                                  </a>
                                </center>
                            </td>
                        </tr>
                        
 <!-- Modal CIERRE DE CAJA -->
 <div class="modal fade" id="editModal{{$item->COD_CAJA}}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="editModalLabel">Realizar cierre de caja</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><b>X</b></span>
              </button>
          </div>
          <div class="modal-body">
              <!-- Similar content as the original modal, adjusted for editing -->
              <div id="editDivision">
                <form action="{{url('cajas/cierreCaja')}}" method="POST">
                  @csrf
                    <input value="{{$item->COD_CAJA}}" type="number" id="id_caja" name="id_caja" required placeholder="0:00">
                  <label for="campo7">Cantidad inicial (Bs):</label>
                  <input type="number" id="campo7" name="monto_cierre" required placeholder="0:00">
                  <br>
                  
              </div>
              <div class="derecha">
                  <br>
                  <br>
                  <button  type="submit" class="btn btn-dark mr-2">Registrar</button>
                  <a href="#" class="btn btn-dark" data-dismiss="modal">Cancelar</a>
              </div>
            </form>
          </div>
      </div>
  </div>
</div>
<!-- FIN Modal CIERRE DE CAJA-->
                        @php $contador++; @endphp
                        @endforeach
                    </tbody>
                    
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- Modal CREAR SUCURSAL -->
      <div class="modal fade" id="exampleModal-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-3"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel-3">Registrar la cantidad inicial</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><b>X</b></span>
              </button>
            </div>
            <div class="modal-body">
              <!-- División 2 -->
              <div id="division3">
                <form action="{{url('cajas/store')}}" method="POST">
                  @csrf
                 
                    <label for="campo8">Seleccionar usuario:</label>
                    <select name="cod_empleado" class="form-control selectric select2" id="select2">
                      @foreach($empleado as $item)
                      <option value="{{$item->COD_EMPLEADO}}">{{$item->NOMBRE}} {{$item->APELLIDO}}</option>
                      @endforeach
                    </select>
                
                  
                 <br>
                 <br>
                  <label for="campo7">Cantidad inicial (Bs):</label>
                  <input type="number" id="campo7" name="cantidad_inicial" required placeholder="0:00"><br>

              </div>
              <div class="derecha">
                <br>
                <br>
                <button type="submit" class="btn btn-dark mr-2">Registrar</button>
                <a href="#" class="btn btn-dark" data-dismiss="modal">Cancelar</a>
              </div>
              </form>
            </div>
          </div>
        </div>
        <!--FIN Modal CREAR SUCURSAL -->
 
        @endsection
        @section('script')  

  @if (session('mensaje') == 'ok')
    <script>
    
      Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Realizado correctamente',
        showConfirmButton: false,
        timer: 1500
        })
    </script>    
  @endif    
  @endsection