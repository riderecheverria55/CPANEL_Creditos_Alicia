
<!DOCTYPE html>
<html lang="en">
<head>
    <style>

@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
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