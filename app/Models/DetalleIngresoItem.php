<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleIngresoItem extends Model
{
    use HasFactory;
    protected $primaryKey = 'COD_DETALLE_INGRESO';
    protected $table = 'tbl_detalle_ingreso';
    protected $fillable = [  'COD_DETALLE_INGRESO','COD_INGRESO_DET',
                            'COD_ITEM','CANTIDAD','PRECIO_COMPRA','SUB_TOTA_COMPRA',
                           'CREATED_AT','UPDATED_AT'
                          ];
}
