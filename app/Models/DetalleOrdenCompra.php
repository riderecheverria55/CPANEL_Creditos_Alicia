<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleOrdenCompra extends Model
{
    use HasFactory;
    protected $primaryKey = 'COD_DETALLE_COM';
    protected $table = 'tbl_detalle_orden_compra';
    protected $fillable = [  'COD_DETALLE_COM','COD_ORDEN_COMPRA',
                            'COD_ITEM','CANTIDAD_COMPRA','PRECIO_COMPRA','SUB_TOTA_COMPRA',
                            'ESTADO','CREATED_AT','UPDATED_AT'
                          ];
}
