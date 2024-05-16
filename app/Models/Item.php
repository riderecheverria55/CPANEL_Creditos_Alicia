<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table = 'tbl_item';
    protected $primaryKey = 'COD_ITEM';
    protected $fillable = ['COD_ITEM','NOMBRE','CODIGO_ITEM','NUMERO_SERIE','COD_CATEGORIA',
                            'COD_SUB_CAT','ESTADO','CREATED_AT','UPDATED_AT' 
                          ];
                          
}
