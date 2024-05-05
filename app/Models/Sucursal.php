<?php

namespace App\Models;
use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;
    protected $table = 'tbl_sucursal';
    protected $primaryKey = 'COD_SUCURSAL';
    protected $fillable = ['COD_SUCURSAL','NOMBRE_SUCURSAL','DIRECCION','EMPLEADO_COD','ESTADO','CREATED_AT','UPDATED_AT' 
                          ];

    public function empleado(){
        return $this->belongsTo(Empleado::class,'EMPLEADO_COD','COD_EMPLEADO');
    }
}
