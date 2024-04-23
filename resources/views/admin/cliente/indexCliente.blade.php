@extends('admin.principal')
@section('contenido')
<style>
    @import url("https://fonts.googleapis.com/css2?family=Baloo+Tamma+2&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Baloo Tamma 2", cursive;
}



/* left part*/

#left {
  display: flex;
  justify-content: flex-start;
  align-items: center;
  flex-direction: column;
  width: 25rem;
  height: 25rem;
}
#in {
  display: flex;
  flex-direction: column;
}

p {
  color: black;
  text-align: center;
  letter-spacing: 1px;
  font-size: 25px;
  padding: 60px 0;
  font-weight: 800;
  text-transform: uppercase;
  text-decoration: #feb101 3px solid underline;
  text-underline-position: under;
}

/* Input Type */

#text {
  margin-bottom: 30px;
  font-size: large;
  padding: 5px 25px 0 10px;
  font-weight: 600;
  letter-spacing: 1px;
}

input::placeholder {
  font-weight: 500;
  font-size: large;
}
/* Button */

i {
  margin-right: 8px;
  font-weight: 700;
}
button {
  padding: 5px 0;
  border: none;
  color: black;
  border-radius: 5px;
  background: #feb101;
  font-size: 18px;
  font-weight: 800;
  cursor: pointer;
}
button:hover {
  background: black;
  color: #feb101;
}
button:active {
  transform: translateY(4px);
}

/* Right part */

#right {
  background: #feb101;
  width: 25rem;
  height: 25rem;
  display: flex;
  align-items: center;
  justify-content: center;
}

</style>
<input type="hidden" id="ruta" value="{{url('/')}}">
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Clientes
            </h3>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="order-listing_wrapper"
                                        class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="dataTables_length" id="order-listing_length">
                                                    <form action="{{route('clientes.index')}}" method="GET" class="form_date" id="formulario">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <input class="form-control" id="buscar" name="buscar" type="text" onkeypress="return soloLetras(event)" placeholder="Buscar por nombre....."/>
                                                            </div>
                                                            <div class="col-3">
                                                                <button type="submit" class="btn btn-dark">
                                                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-search" aria-hidden="true"></i></span>
                                                                </button>
                                                            </div>
                                                            <div class="col-3">
                                                                <a onclick="window.location.href='{{ route('clientes.index') }}'" class="btn btn-dark">
                                                                    <i class="fas fa-undo-alt"></i>
                                                                </a>
                                                            </div>
                                                            <div class="col-3">
                                                                <a href="{{route('clientes.create')}}" class="btn btn-dark">
                                                                    + Agregar nuevo
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            
                                            {{-- <div class="col-sm-12 ">
                                                <div class="dataTables_length" id="order-listing_length">
                                                    <form action="{{route('clientes.index')}}" method="GET" class="form_date" id="formulario">
                                                        <div>
                                                            <input class="form-control" id="buscar" name="buscar" type="text"  onkeypress="return soloLetras(event)" placeholder="Buscar por nombre....."/>
                                                            <button type="submit">
                                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-search" aria-hidden="true"></i></span>
                                                                </button>
                                                            <a  onclick="window.location.href='{{ route('clientes.index') }}'" class="btn btn-dark">
                                                                <i class="fas fa-undo-alt"></i>
                                                            </a>
                                                            <a href="{{route('clientes.create')}}"  class="btn btn-dark ">
                                                           + Agregar nuevo
                                                          </a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="products_listing" class="table order-table ">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>NOMBRE</th>
                                                        <th>APELLIDO</th>
                                                        <th>CELULAR</th>
                                                        <th>CELULAR 2</th>
                                                        <th>NIT</th>
                                                        <th>DIRECCION</th>
                                                        <th>Acciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="data_persona">
                                                    <?php $contador = 1?>
                                                    @foreach ($clientes as $item)
                                                      <tr>
                                                        <td  class="text-center" scope="row"><?php echo $contador;?></td>
                                                        <td class="text-center">{{$item->NOMBRE}}</td>
                                                        <td class="text-center">{{$item->APELLIDO}}</td>
                                                        <td class="text-center">{{$item->CELULAR}}</td>
                                                        <td class="text-center">{{$item->CELULAR_2}}</td>
                                                        <td class="text-center">{{$item->NIT}}</td>
                                                        <td class="text-center">{{$item->DIRECCION}}</td>
                                                        <td style="width: 20%;">
                                                            <a class="btn btn-outline-warning"  href="{{ route('clientes.show', $item->COD_CLIENTE) }}">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                            </a>
                                                            <button class="btn btn-danger btn-sm  mx-2 eliminarCliente" action="{{ url('clientes/destroy',$item->COD_CLIENTE)}}"
                                                                method="DELETE" token="{{ csrf_token() }}" pagina="clientes">
                                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                            </button>
                                                            <a class="btn btn-outline-info" href="{{ route('clientes.edit', $item->COD_CLIENTE) }}" title="Editar">
                                                                <i class="far fa-edit"></i>
                                                            </a>
                                                            {{-- <a href="#" class="btn btn-outline-danger"
                                                         data-toggle="modal" data-target=""><i
                                                             class="far fa-trash-alt"></i></a> --}}
                                                        </td>
                                                        {{-- <td class="text-center">     
                                                          <center>
                                                            <button type="button" " class="btn btn-warning btn-sm mx-2" data-toggle="modal"
                                                            data-target="#editarPersona{{$item->cod_persona}}"><i class="fa fa-pencil" aria-hidden="true"></i>
                                                            </button>
                                                            <button class="btn btn-danger btn-sm mx-2 eliminarPersona" action="{{ url('personas/destroy',$item->cod_persona) }}"
                                                              method="DELETE" token="{{ csrf_token() }}" pagina="personas">
                                                              <i class="fa fa-trash" aria-hidden="true"></i>
                                                            </button>
                                                          </center>
                                                        </td> --}}
                                                      </tr>
                                                          
                                                      <?php  $contador++;?>
                                                    @endforeach 
                                                  </tbody>
                                                  {{-- <td style="width: 20%;">
                                                    <a class="btn btn-outline-warning"  href="">
                                                     <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                     <a class="btn btn-outline-info" href="" title="Editar">
                                                         <i class="far fa-edit"></i>
                                                     </a>
                                                     <a href="#" class="btn btn-outline-danger"
                                                         data-toggle="modal" data-target=""><i
                                                             class="far fa-trash-alt"></i></a>
                                                 </td> --}}
                                            <table>
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
  <script type="text/javascript">

    $(document).on("click", ".eliminarCliente",function(){
      var ruta = $("#ruta").val();
      let action = $(this).attr("action");
      let method = $(this).attr("method");
      let token = $(this).attr("token");
      let pagina = $(this).attr("pagina");
      Swal.fire({
        title: 'Estas seguro?',
        text: "De eliminar al cliente!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar!',
        cancelButtonText: 'Cancelar'
      }).then((result) =>
        {
          if(result.isConfirmed)
          {
            let datos = new FormData();
            datos.append("_method", method);
            datos.append("_token", token);
            $.ajax
            ({
              url:action,
              method: "POST",
              data:datos,
              cache:false,
              contentType:false,
              processData:false,
              success: function(res)
              {
                if(res == "ok")
                {
                  Swal.fire({
                  type: 'success',
                  title: 'El registro ha sido eliminado.',
                  showConfirmButton: true,
                  confirmButtonText: 'Cerrar',
                  }).then((result) => {
                      if (result.isConfirmed) {
                        window.location = ruta+'/'+pagina;
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