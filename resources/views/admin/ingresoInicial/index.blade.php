@extends('admin.principal')
@section('contenido')
<input type="hidden" id="ruta" value="{{url('/')}}">
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
            Datos Inventario Inicial
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
                                                    data-table="order-table" type="text" name="buscar"
                                                    placeholder="Busqueda por nombre"
                                                    onkeypress="return soloLetras(event)">
                                                    <button type="submit" class="btn btn-dark">
                                                        <span class="" id="basic-addon1"><i class="fa fa-search" aria-hidden="true"></i></span>                                                                   
                                                </button>
                                                <a onclick="window.location.href='{{ route('ingresoInicial.index') }}'" class="btn btn-dark">
                                                    <i class="fas fa-undo-alt"></i>
                                                </a> 
                                                <a href="{{route('ingresoInicial.create')}}" class="btn btn-dark ">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i> <B>Agregar nuevo</B> 
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
                                              <th class="text-center" style="color: #fff;">CODIGO</th>
                                              <th class="text-center" style="color: #fff;">SUCURSAL</th>
                                              <th class="text-center" style="color: #fff;">FECHA</th>
                                              <th class="text-center" style="color: #fff;">N. FACTURA</th>
                                              <th class="text-center" style="color: #fff;">OBSERVECION</th>
                                              <th class="text-center" style="color: #fff;">ACCIONES</th>
                                          </thead>
                                          <tbody>
                                            <?php $contador = 1?>
                                            @foreach ($detalle as $item)
                                            <tr>
                                                <td class="text-center" scope="row"><?php echo $contador;?></td>
                                                <td class="text-center">{{$item->NRO_INGRESO}}</td>
                                                <td class="text-center">{{$item->NOMBRE_SURCUSAL }}</td>
                                                <td class="text-center">{{$item->FECHA}}</td>
                                                <td class="text-center">{{$item->NRO_FACTURA}}</td>
                                                <td class="text-center">{{$item->OBSERVACIONES}}</td>
                                                <td style="width: 20%;">
                                                    <center>
                                                        <a class="btn btn-outline-danger" href="{{ route('ingresoInicial.pdf', $item->COD_INGRESO) }}"
                                                            target="_blank" title="pdf">
                                                            <i class="fa fa-file-pdf"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-outline-danger eliminaringresoInicial"
                                                            action="{{ url('ingresoInicial/destroy',$item->COD_INGRESO)}}"
                                                            method="DELETE"
                                                            token="{{ csrf_token() }}" pagina="ingresoInicial">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
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
    <script type="text/javascript">
            
        $(document).on("click", ".eliminaringresoInicial", function () {
            var ruta = $("#ruta").val();
            let action = $(this).attr("action");
            let method = $(this).attr("method");
            let token = $(this).attr("token");
            let pagina = $(this).attr("pagina");
        Swal.fire({
            title: 'Estas seguro?',
            text: "De eliminar Items!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, eliminar!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
            let datos = new FormData();
            datos.append("_method", method);
            datos.append("_token", token);
            $.ajax
                ({
                url: action,
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success: function (res) {
                    if (res == "ok") {
                    Swal.fire({
                        type: 'success',
                        title: 'El registro ha sido eliminado.',
                        showConfirmButton: true,
                        confirmButtonText: 'Cerrar',
                    }).then((result) => {
                        if (result.isConfirmed) {
                        window.location = ruta + '/' + pagina;
                        }
                    });
                    }
                }
            })
            }
        });
        });
    </script>
@endsection