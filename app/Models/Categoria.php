<?php

namespace App\Models;
use App\Models\SubCategoria;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = 'tbl_categoria';
    protected $primaryKey = 'COD_CATEGORIA';
    protected $fillable = ['COD_CATEGORIA','NOMBRE_CATEGORIA','ESTADO','CREATED_AT',
                              'UPDATE_AT'
                          ];
    public function subCategoria(){
      return $this->hasMany(SubCategoria::class,'COD_CATEGORIA','COD_CATEGORIA');
    }
}
