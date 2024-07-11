<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVentaCredito extends Model
{
    use HasFactory;
    protected $table = 'tbl_detalle_venta_credito';
    protected $primaryKey = 'COD_DETALLE_CREDITO';
    protected $fillable = ['COD_DETALLE_CREDITO','COD_CREDITO','TIPO_CUOTA','FECHA_VENCIMIENTO','NRO_CUOTA',
                            'OBSERVACION','TIPO_PAGO','MONTO_PAGADO','FECHA_PAGO','CREATED_AT','UPDATED_AT'
                          ];
    
}
