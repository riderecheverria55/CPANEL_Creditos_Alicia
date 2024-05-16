<?php

namespace App\Models;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategoria extends Model
{
    use HasFactory;
    protected $table = 'tbl_sub_categoria';
    protected $primaryKey = 'COD_SUB_CATEGORIA';
    protected $fillable = ['COD_SUB_CATEGORIA','COD_CATEGORIA','NOMBRE_SUB',
                            'ESTADO','CREATED_AT','UPDATED_AT' 
                          ];
    
    public function categoria(){
        return $this->belongsTo(Categoria::class,'COD_CATEGORIA','COD_CATEGORIA');
    }
}
