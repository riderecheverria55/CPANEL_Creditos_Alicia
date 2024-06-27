
<!DOCTYPE html>
<html lang="en">
<head>
<<<<<<< HEAD
  <title>Orden de compra</title>
</head>
<body translate="no">
  <div class="container">
    <img class="logo" height="100px" width="250px" src="imagenes/logos/logo ca.png">

    <div class="row header">
      <h1 class="title"><b>ORDEN DE COMPRA</b></h1>
    </div>
    <div class="row invoice-content">
      <div class="col-4 pl-5">
        <br>
        <h5><i class="fa fa-building-o pr-1" aria-hidden="true"></i> Creditos Alicia S.R.L</h5>
        <h5><i class="fa fa-phone pr-1" aria-hidden="true"></i> (+591) 71378667</h5>
        <h5><i class="fa fa-envelope-o pr-1" aria-hidden="true"></i> CreditosAlicia@gmail.com</h5>
      </div>

      <div class="col-4 offset-4 text-right pr-5 pt-3">
        <h4>N. Factura: <strong>#45145</strong></h4>
        <h4>Fecha:<strong> 18/05/2024</strong></h4>
      </div>
    </div>

    <div class="row invoiced-details">
      <div class="col-8 invoiced-to p-5">
        <h3><u>Datos del proveedor</u></h3>
        <h5><i class="fa fa-building-o pr-1" aria-hidden="true"></i> POWER BOLIVIA</h5>
        <h5><i class="fa fa-phone pr-1" aria-hidden="true"></i> (+591) 71378667</h5>
        <h5><i class="fa fa-envelope-o pr-1" aria-hidden="true"></i> SERNAMOTOS@gmail.com</h5>
      </div>
      <div class="col-4 invoiced-to p-6"><br><br>
        <h3><u>N. Sucursal
          </u></h3>
        <h5>CASA MATRIZ CRÉDITOS ALICIA</h5>
        <h5> <b>Encargado de sucursal:</b></h5>
        <h5> juan carlos garcia</h5>
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
            <th scope="col" style="color: hwb(0 5% 95% / 0.797);" class="text-center">PRECIO U.</th>
            <th scope="col" style="color: hwb(0 5% 95% / 0.797);" class="text-center">SUBTOTAL</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center">1</td>
            <td class="text-center">Moto Power FOX-250/2024 color AZUL</td>
            <th></th>
            <td class="text-center">4</td>
            <td class="text-center">7500 Bs</td>
            <td class="text-center">37500 Bs</td>
          </tr>
          <tr>
            <td class="text-center">2</td>
            <td class="text-center">Moto Power CGL-200/2024 color blaco</td>
            <th></th>
            <td class="text-center">5</td>
            <td class="text-center">8000 Bs</td>
            <td class="text-center">16000 Bs</td>
          </tr>
          <tr>
            <td class="text-center">3</td>
            <td class="text-center">Moto Power LIBERTY-200 CC/2024 color AZUL</td>
            <th></th>
            <td class="text-center">2</td>
            <td class="text-center">7000 Bs</td>
            <td class="text-center">28000 Bs</td>
          </tr>
          <tr>
          <tr>
            <td class="text-center">4</td>
            <td class="text-center">Moto Power CB1-150/2024 color negro</td>
            <th></th>
            <td class="text-center">4</td>
            <td class="text-center">6500 Bs</td>
            <td class="text-center">32500 Bs</td>
          </tr>
          <tr class="total">
            <td colspan="3" class="empty"></td>
            <td colspan="2" class="total">
              <h4 style="color: hwb(0 5% 95% / 0.797);"><strong>TOTAL</strong></h4>
            </td>
            <td class="total-value">
              <h4 style="color: hwb(0 5% 95% / 0.797);"><strong>114000 <span class="curency">Bs.</span></strong></h4>
            </td>
          </tr>
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
=======
    <style>

@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
>>>>>>> 7d947a7c765213af9a28d1071a65c646c84ce1c3
    background-color: #ffffff;
}

.container {
    max-width: 750px;
    margin: 20px auto;
    padding: 20px;
    background-color: #ffffff;
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
}

header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 20px;
    align-items: flex-start;
}

.logo-container {
    display: flex;
    align-items: flex-start;
}
img.logo {
    margin-right: 40px;
  }

header img {
    height: 40px;
    margin-right: 10px;
}

.company-info {
    text-align: right;
    color: #000000;
    font-size: 14px;
}

header h1 {
    margin: 0;
    color: #040404;
    font-size: 24px;
}

.header-info {
    text-align: right;
    color: #000000;
    font-size: 14px;
}

hr {
    border: none;
    border-top: 2px solid #e30613;
    margin: 20px 0;
}

.details {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.ingreso-datos,
.sucursal-datos {
    flex-basis: 40%;
}
.ingreso-dato,
.sucursal-dato {
    flex-basis: 30%;
}

.ingreso-datos h2,
.sucursal-datos h2 {
    color: #e30613;
    font-size: 18px;
    margin-top: 0;
}
.ingreso-dato h2,
.sucursal-dato h2 {
    color: #e30613;
    font-size: 18px;
    margin-top: 0;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #e30613;
    color: #fff;
    font-weight: normal;
}  


h1.title {
    color: #000000;
    font-size: 25px;
    text-align: left;
    width: 150%;
    /* Hace que el h1 ocupe todo el ancho del contenedor */
    margin: 0 auto;
    /* Centra el h1 horizontalmente */
  }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORDEN DE COMPRA</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        
          <img class="logo" height="70px" width="180px" src="imagenes/logos/logo ca.png"> 
    
        <header>
           
            <div class="ingreso-dato">
                <p>🏦 Creditos Alicia S.R.L</p>
                <p>☎ (+591) 71378667</p>
                <p>✉ CreditosAlicia@gmail.com</p>
            </div>
            <div class="row header">
            <br>
              <h1 class="title"><b>ORDEN DE COMPRA</b></h1>
            </div>
            <div class="header-info">
                <p><b>N. Ingreso:</b> #45145</p>
                <p><b>Fecha:</b> 18/05/2024</p>
            </div>
        </header>
        <hr>
        <div class="details">
            <div class="ingreso-datos">
                <h2><b>Datos del proveedor</b></h2>
                <p><b>Empresa:</b>  POWER BOLIVIA</p>
                <p><b>Celular:</b> (+591) 71378667</p>
                <p><b>Correo:</b> SERNAMOTOS@gmail.com</p>
            </div>
            <div class="sucursal-datos">
                <h2><b>Datos de sucursal</b></h2>
                <p>CASA MATRIZ CRÉDITOS ALICIA</p>
                <p><b>Encargado de sucursal:</b> juan carlos garcia</p>
            </div>
        </div>
        <hr>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th><b>Nr.</b></th>
                        <th><b>PRODUCTO</b></th>
                        <th><b>CANTIDAD</b></th>
                        <th><b>PRECIO COMPRA</b></th>
                        <th><b>SUBTOTAL</b></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Moto Power FOX-250/2024 color AZUL</td>
                        <td>4</td>
                        <td>7500 Bs</td>
                        <td>37500 Bs</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Moto Power CGL-200/2024 color blaco</td>
                        <td>5</td>
                        <td>8000 Bs</td>
                        <td>16000 Bs</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Moto Power LIBERTY-200 CC/2024 color AZUL</td>
                        <td>2</td>
                        <td>7000 Bs</td>
                        <td>28000 Bs</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Moto Power CB1-150/2024 color negro</td>
                        <td>4</td>
                        <td>6500 Bs</td>
                        <td>32500 Bs</td>
                    </tr>
                    <tr>
                      <th colspan="2"></th>
                      <th></th>
                      <th><b>TOTAL:</b></th>
                      <th><b>22000 Bs</b></th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>