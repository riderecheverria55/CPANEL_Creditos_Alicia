<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salida extends Model
{
    use HasFactory;
    protected $primaryKey = 'COD_SALIDA';
    protected $table = 'tbl_salida';
    protected $fillable = [ 'COD_SALIDA','SALIDA_SUCURSAL','INGRESO_SUCURSAL','TIPO_SALIDA',
                            'NUMERO_SALIDA','OBSERVACION','FECHA','ENCARGADO','CHOFER','ESTADO',
                            'CREATED_AT','UPDATED_AT'
                          ];
}
