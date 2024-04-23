<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    
    protected $table = 'tbl_cliente';
    protected $primaryKey = 'COD_CLIENTE';
    protected $fillable = ['COD_CLIENTE','NOMBRE','APELLIDO','CELULAR','CELULAR_2',
                            'DIRECCION','URL_DIRECCION','IMAGEN_QR','NIT','ESTADO','CREATED_AT','UPDATED_AT' 
                          ];
}
