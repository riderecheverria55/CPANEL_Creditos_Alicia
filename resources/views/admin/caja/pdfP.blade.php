
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
    <title>Cierre de Caja</title>
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

              <h1 class="title"><b>CIERRE DE CAJA</b></h1>
            </div>
            <div class="header-info">
                <p><b>N. Ingreso:</b> #45145</p>
                <p><b>Fecha:</b> 18/05/2024</p>
            </div>
        </header>
        <hr>
        <div class="details">
            <div class="ingreso-datos">
                <h2><b>Datos de ingreso</b></h2>
                <p><b>Tipo de ingreso:</b> Cierre de caja</p>
                <p><b>Estado:</b> Cerrado</p>
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
                <tr>
                  <th colspan="2"><b>Sucursal central</b></th>
                </tr>
                <tr>
                  <td>Fecha de operacion</td>
                  <td >2024-06-15 07:55:27</td>
                </tr>
                <tr>
                  <td>Nombre del cajero</td>
                  <td>Administrador</td>
                </tr>
                <tr>
                  <th><b>Movimientos</b></th>
                  <th></th>
                </tr>
                <tr>
                  <td>Fondo de caja</td>
                  <td>10000.00</td>
                </tr>
                <tr>
                  <td>Efectivo en caja</td>
                  <td>2222.00</td>
                </tr>
                <tr>
                  <td>Ventas en efectivo</td>
                  <td>0.00</td>
                </tr>
                <tr>
                    <td>Deposito bancario</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>Trasferencia QR</td>
                    <td>0.00</td>
                  </tr>
                <tr>
                  <td>Faltante</td>
                  <td>0.00</td>
                </tr>
                <tr>
                  <td>Sobrante</td>
                  <td>2222</td>
                </tr>
              </table>
        </div>
    </div>
</body>
</html>