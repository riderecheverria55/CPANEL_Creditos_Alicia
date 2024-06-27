<html lang="en">
<head>

  <title>Comprobante de salida</title>
 
  <script>
    window.console = window.console || function (t) { };
  </script>
</head>
<body translate="no">
  <div class="container">
    <img class="logo" height="100px" width="250px" src="imagenes/logos/logo ca.png">

    <div class="row header">

      <h1 class="title"><b>COMPROBANTE DE SALIDA</b></h1>
    </div>
    <div class="row invoice-content">
      <div class="col-4 pl-5">
        <br>
        <h5><i class="fa fa-building-o pr-1" aria-hidden="true"></i> Creditos Alicia S.R.L</h5>
        <h5><i class="fa fa-phone pr-1" aria-hidden="true"></i> (+591) 71378667</h5>
        <h5><i class="fa fa-envelope-o pr-1" aria-hidden="true"></i> CreditosAlicia@gmail.com</h5>
      </div>

      <div class="col-4 offset-4 text-right pr-5 pt-3">
        <h4>N. salida: <strong>{{ e($datos->first()->NUMERO_SALIDA) }}</strong></h4>
        <h4>Fecha:<strong> {{ e($datos->first()->FECHA) }}</strong></h4>
      </div>
    </div>

    <div class="row invoiced-details">
      <div class="col-8 invoiced-to p-5">
        <h3><u>Datos de salida</u></h3>
        <h5> <b>Tipo de ingreso:</b></h5>
        <h5> {{ e($datos->first()->TIPO_SALIDA) }}</h5>
        <h5> <b> Ingreso sucursal:</b></h5>
        <h5>{{ e($datos->first()->ENTRADA_SUCURSAL_NOMBRE) }}</h5>
        <h5> <b>Nota:</b></h5>
        <h5> {{ e($datos->first()->OBSERVACION) }}</h5>
        
      </div>
      
      <div class="col-4 invoiced-to p-6"><br><br>
        <h3><u>N. Sucursal
          </u></h3>
        <h5>CASA MATRIZ CRÉDITOS ALICIA</h5>
        <h5> <b>Encargado de sucursal:</b></h5>
        <h5> {{ e($datos->first()->NOMBRE_ENCARGADO) }} {{ e($datos->first()->APELLIDO_ENCARGADO) }}</h5>
        <h5> <b>Chofer:</b></h5>
        <h5> {{ e($datos->first()->NOMBRE_CHOFER) }} {{ e($datos->first()->APELLIDO_CHOFER) }}</h5>
      </div>
    </div>

    <div class="row background">
      <table class="table  table-hover">
        <thead class="thead-blue">
          <tr>
            <th scope="col" style="color: hwb(0 5% 95% / 0.797)   ; "  class="text-center">Nr.</th>
            <th scope="col" style="color: hwb(0 5% 95% / 0.797); width: 10%"  class="text-center">CODIGO</th>
            <th scope="col" style="color: hwb(0 5% 95% / 0.797);" class="text-center">PRODUCTO</th>
            <th scope="col" style="color: hwb(0 5% 95% / 0.797);" class="text-center">CANTIDAD</th>
          </tr>
        </thead>
        <tbody>
          <?php $total = 0?>
            <?php $items = 1?>
            <tbody id="detalle_productos">
              @foreach ($productos as $producto)
            
              <tr>
                <td class="text-center"><?php echo $items ?> </td>
                <td class="textright">{{$producto->NUMERO_SALIDA }}</td>
                <td class="text-center">{{$producto->NOMBRE}}</td>
                <td class="textcenter">{{$producto->CANTIDAD}}</td>
                
              </tr>
             <?php 
                $items++;
             ?>
            @endforeach 
          
        </tbody>
      </table>
    </div>
   

    </div>
  </div>
  <div class="row p-3 pl-5 mt-4 background">
    <div class="col-12">

    </div>
  </div>
  </div>
</body>

</html>


















































<style>
  @page {
    bleed: 1cm;
    size: cata portrait;
    size: auto;
    /* auto is the initial value */
    margin-left: 0mm;
    /* this affects the margin in the printer settings */
    margin-bottom: 0mm;
    margin-top: 0mm;

    html {
      background-color: #FFFFFF;
      margin: 0px;
      /* this affects the margin on the html before sending to printer */
    }

    body {
      border: solid 1px rgb(18, 18, 19);
      margin: 10mm 15mm 10mm 15mm;
      /* margin you want for the content */
    }
  }

  @media print {
    .page {
      margin: 0;
      border: initial;
      border-radius: initial;
      width: initial;
      min-height: initial;
      box-shadow: initial;
      background: initial;
      page-break-after: always;
    }
  }

  body {
    background-color: #ffffff;
    -webkit-print-color-adjust: exact !important;
  }

  img.logo {
    margin-right: 40px;
  }

  .container {
    background-color: #fffefe;
    margin-top: 50px;
    margin-bottom: 50px;
    border-top-right-radius: 25px;
    border-top-left-radius: 25px;
    /*   box-shadow: 0 10px 10px #999; */
  }

  div.header {
    position: relative;
  }

  .arrow-right {
    width: 0;
    height: 0;
    border-top: 60px solid transparent;
    border-bottom: 60px solid transparent;
    border-left: 60px solid white;
    z-index: 3;
    position: absolute;
    left: 735px;
    top: 75px;
  }

  h1.title {
    color: #333;
    font-size: 40px;
    text-align: center;
    width: 100%;
    /* Hace que el h1 ocupe todo el ancho del contenedor */
    margin: 0 auto;
    /* Centra el h1 horizontalmente */
  }

  div.header::after {
    background-color: white;
    height: 50px;
    width: 120px;
  }

  div.shape {
    width: 60%;
    height: 150px;
    background-color: white;
    position: absolute;
    top: 50px;
  }

  div.shape::after {
    content: "";
    visibility: visible;
    width: 150px;
    height: 150px;
    background-color: white;
    position: absolute;
    right: -70px;
    border-radius: 100%;
  }

  div.shape::before {
    content: "";
    visibility: visible;
    width: 125px;
    height: 125px;
    background-color: #e3e3e3;
    position: absolute;
    right: -210px;
    top: -28px;
    border-radius: 100%;
    z-index: 0;
  }

  div.rectangle {
    position: absolute;
    height: 100px;
    width: 150px;
    right: 310px;
    top: 120px;
    background-color: white;
    z-index: 0;
  }

  div.invoice-content {
    background-color: white;
    margin-top: -2px;
    z-index: 3;
    border-bottom: 5px solid #e01600;
    padding-bottom: 15px;
  }

  div.invoiced-to {
    color: #333;
  }

  div.invoiced-details {
    background-color: #ffffff;
  }

  table>thead.thead-blue {
    background-color: #e01600;
    color: white;
  }

  div.background {
    background-color: white;
  }

  tr.last-row {
    border-bottom: 3px solid #333;
  }

  td.total {
    width: 200px;
  }

  td.total-value {
    width: 100px;
  }

  td.total,
  td.total-value {
    background-color: #e01600;
    color: white;
  }

  td.empty {
    visibility: hidden;
  }

  .color {
    color: #0079C2;
  }

  td.total-value {
    width: auto;
  }




  /* Estilos adicionales para hacer la tabla más legible en dispositivos móviles */
  table {
    font-size: 14px;
  }

  th,
  td {
    padding: 5px;
  }

  /* Estilos para el pie de página */
  tfoot th {
    padding-top: 12px;
    font-weight: bold;
  }

  #table th {
    width: 10%;
    /* Puedes ajustar este valor según tus necesidades */
  }
</style>








