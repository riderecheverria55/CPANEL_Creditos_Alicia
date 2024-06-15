<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngresoItem extends Model
{
    use HasFactory;
    protected $primaryKey = 'COD_INGRESO';
    protected $table = 'tbl_ingreso_items';
    protected $fillable = [  'COD_INGRESO','COD_SUCURSAL_ING','NRO_FACTURA',
                          'OBSERVACIONES','FECHA','COD_INGRESO','TIPO_INGRESO ','CREATED_AT',
                            'UPDATED_AT'
                          ];
                          
}
