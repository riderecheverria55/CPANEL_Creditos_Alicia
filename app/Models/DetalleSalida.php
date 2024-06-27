<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleSalida extends Model
{
    use HasFactory;
    protected $primaryKey = 'COD_DETALLE_SALIDA';
    protected $table = 'tbl_detalle_salida';
    protected $fillable = [ 'COD_DETALLE_SALIDA','COD_SALIDA_DETA',
                            'COD_ITEM','CANTIDAD','ESTADO','CREATED_AT','UPDATED_AT'
                          ];
}
