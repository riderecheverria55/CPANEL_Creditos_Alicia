<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cobro de  credito - Creditos Alicia</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap');
        
        @page {
            size: letter;
            margin: 0;
        }
        
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            width: 21.59cm;
            height: 27.94cm;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            width: 18.59cm;
            height: 24.94cm;
            padding: 1.5cm;
            box-sizing: border-box;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            position: relative;
            overflow: hidden;
        }
        .watermark {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0.1;
            z-index: 0;
            width: 50%;
            height: auto;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 0px;
            border-bottom: 2px solid #cc0000;
            padding-bottom: 5px;
            position: relative;
            z-index: 1;
        }
        .logo {
            max-width: 150px;
        }
        .company-info {
            text-align:;
        }
        h1 {
            margin: 0;
            color: #cc0000;
            font-size: 20px;
        }
        .info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .client-info, .invoice-info {
            width: 48%;
            background-color: #f9f9f9;
            padding: 3px;
            border-radius: 5px;
        }
        .section-title {
            font-size: 16px;
            color: #cc0000;
            margin-bottom: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            font-size: 12px;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
            color: #333;
        }
        .total {
            text-align: right;
            font-size: 14px;
            font-weight: bold;
            color: #cc0000;
            margin-top: 15px;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 12px;
            color: #666;
        }
        .product-image {
            max-width: 60px;
            margin-right: 5px;
            vertical-align: middle;
        }
        p {
            margin: 5px 0;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="imagenes/logos/logo ca.png" alt="Watermark" class="watermark">
        <div class="header">
            <img src="imagenes/logos/logo ca.png" alt="Honda Logo" class="logo">
             <div class="company-info">
                <center><h1>Cobro de  credito</h1><center>
                <center><p><b>Se pago la cuota 3</b></p></center>
                <center><p>Proxima cuota vence el:27/06/2024</p></center>
            </div>
            <div class="company-info">
                <p>🏦 Av. Principal 1000, Santa Cruz</p>
                <p>☎ (+591) 71378667</p>
                <p>✉ CreditosAlicia@gmail.com</p>
            </div>    
        </div>
        <div class="info">
            <div class="client-info">
                <h3 class="section-title">Datos del Cliente</h3>
                <p><strong>Nombre:</strong> Juan Pérez</p>
                <p><strong>Cedula/NIT:</strong> 123456768</p>
                <p><strong>Dirección:</strong> Av. Principal 123, La Paz</p>
                <p><strong>Teléfono:</strong> 71234567</p>
                <p><strong>Gmail:</strong> juan@gmail.com</p>
            </div>
            <div class="invoice-info">
             
            </div>
            <div class="invoice-info">
                <h3 class="section-title">Datos del credito</h3>
                <p><strong>Cobro N°:</strong> 001-002-000123</p>
                <p><strong>Fecha:</strong> 27/06/2024</p> 
                <p><strong>Cajero/a:</strong> Carlos Rodríguez</p>
                <p><strong>Nota:</strong> MOTOSICLRTA-TRABAJO-CANDA 150CC-2024-ROJO</p>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>Cuota a pagar (Bs)</th>
                    <th>Subtotal (Bs)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        Honda CBR500R
                    </td>
                    <td>
                        Motor: 471cc, bicilíndrico en línea<br>
                        Color: Rojo Racing
                    </td>
                    <td>1</td>
                    <td>1300.00</td>
                    <td>1300.00</td>
                </tr>
                <tr>
                    <td>cosina</td>
                    <td>cosina de 3 hornillas </td>
                    <td>1</td>
                    <td>500.00</td>
                    <td>500.00</td>
                </tr>
            </tbody>
        </table>
        <div class="total">
            <p>Total a Pagar: Bs 18000.00</p>
        </div>
        <div class="footer">
            <p>Gracias por su compra. Para cualquier consulta, por favor contáctenos al +591 3 1234567</p>
            <p>Creditos Alicia S.R.L - NIT: 1234567890</p>
            <p>www.CreditosAliciaBolivia.com</p>
        </div>
    </div>
</body>
</html>