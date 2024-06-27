<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caja extends Model
{
    use HasFactory;
    protected $table = 'tbl_caja';
    protected $primaryKey = 'COD_CAJA';
    protected $fillable = ['COD_CAJA','COD_EMPLEADO','CODIGO','MONTO_INICIAL','MONTO_FINAL','ESTADO','CREATED_AT','UPDATED_AT' 
                          ];
}
