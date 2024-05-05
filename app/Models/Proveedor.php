<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $table = 'tbl_proveedor';
    protected $primaryKey = 'COD_PROVEEDOR';
    protected $fillable = ['COD_PROVEEDOR','NOMBRE','CORREO','CELULAR','CELULAR_2',
                            'DIRECCION','NIT','ESTADO','CREATED_AT','UPDATED_AT' 
                          ];
}
