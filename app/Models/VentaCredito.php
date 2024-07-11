<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VentaCredito extends Model
{
    use HasFactory;
    protected $table = 'tbl_venta_credito';
    protected $primaryKey = 'COD_CREDITO';
    protected $fillable = ['COD_CREDITO','COD_CLIENTE','TIPO_CICLO','COD_CONYUGE','COD_GAR_PERSONAL','CODIGO_CREDITO',
                            'FECHA','COD_PRODUCTO','PRECIO_CREDITO','CUOTA_INICIAL','SALDO_PAGAR',
                            'M_PLAZO','MTO_CUOTA','N_CUOTAS','OBSERVACIONES','DIR_URL_FOTO','ESTADO','COD_REGISTRA',
                            'CREATED_AT','UPDATED_AT','COD_SUCURSAL'
                          ];
}
