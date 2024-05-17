<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenCompraM extends Model
{
    use HasFactory;
    protected $primaryKey = 'COD_COMPRA';
    protected $table = 'tbl_orden_compra';
    protected $fillable = [  'COD_COMPRA','COD_PROVEEDOR','NRO_FACTURA',
                            'DESCRIPCION','FECHA','ESTADO ','CREATED_AT',
                            'UPDATED_AT','COD_SUCURSAL'
                          ];
}
