<html lang="en">
<head>

 
 
</head>
<body translate="no">
  <div class="container">
    <img class="logo" height="100px" width="250px" src="imagenes/logos/logo ca.png">

    <div class="row header">

      <h1 class="title"><b>COMPROBANTE DE INGRESO</b></h1>
    </div>
    <div class="row invoice-content">
      <div class="col-4 pl-5">
        <br>
        <h5><i class="fa fa-building-o pr-1" aria-hidden="true"></i> Creditos Alicia S.R.L</h5>
        <h5><i class="fa fa-phone pr-1" aria-hidden="true"></i> (+591) 71378667</h5>
        <h5><i class="fa fa-envelope-o pr-1" aria-hidden="true"></i> CreditosAlicia@gmail.com</h5>
      </div>

      <div class="col-4 offset-4 text-right pr-5 pt-3">
        <h4>N. Ingreso: <strong>{{ e($datos->first()->NRO_INGRESO) }}</strong></h4>
        <h4>Fecha:<strong> {{ e($datos->first()->FECHA) }}</strong></h4>
      </div>
    </div>

    <div class="row invoiced-details">
      <div class="col-8 invoiced-to p-5">
        <h3><u>Datos de ingreso</u></h3>
        <h5> <b>Tipo de ingreso:</b></h5>
        
        <h5>{{ e($datos->first()->TIPO_INGRESO) }}</h5>
        <h5> <b>Observaciones:</b></h5>
        <h5>{{ e($datos->first()->OBSERVACIONES) }}</h5>
        
      </div>
      
      <div class="col-4 invoiced-to p-6"><br><br>
        <h3><u>N. Sucursal
          </u></h3>
        <h5>{{ e($datos->first()->NOMBRE_SURCUSAL) }}</h5>
      
      </div>
    </div>

    <div class="row background">
      <table class="table  table-hover">
        <thead class="thead-blue">
          <tr>
            <th scope="col" style="color: hwb(0 5% 95% / 0.797); "  class="text-center">Nr.</th>
            <th scope="col" style="color: hwb(0 5% 95% / 0.797);" class="text-center">PRODUCTO</th>
            <th></th>
            <th scope="col" style="color: hwb(0 5% 95% / 0.797);" class="text-center">CANTIDAD</th>
            <th scope="col" style="color: hwb(0 5% 95% / 0.797);" class="text-center">PRECIO COMPRA</th>
        

          </tr>
        </thead>
        <tbody>
            <?php $total = 0?>
            <?php $items = 1?>
            <tbody id="detalle_productos">
              @foreach ($productos as $producto)
                <?php $subtotal = $producto->PRECIO_COMPRA * $producto->CANTIDAD?>
              <tr>
                <td class="text-center"><?php echo $items ?> </td>
                <td class="text-center">{{$producto->NOMBRE}}</td>
                <td class="textcenter">{{$producto->CANTIDAD}}</td>
                <td class="textright">{{$producto->PRECIO_COMPRA}} Bs</td>
                <td class="textright"><?php echo $subtotal ?> Bs</td>
              </tr>
             <?php $total = $total + $subtotal ;
                $items++;
             ?>
            @endforeach 
        </tbody>
        <tfoot id="detalle_totales">
            <tr>
                <td colspan="3" class="textright"><span><b>TOTAL</b> </span></td>
                <td class="textright"><span> <?php echo $total ?> Bs</span></td>
            </tr>
        </tfoot>
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





































