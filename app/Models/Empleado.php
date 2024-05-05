<?php

namespace App\Models;
use App\Models\Sucursal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $table = 'tbl_empleado';
    protected $primaryKey = 'COD_EMPLEADO';
    protected $fillable = ['COD_EMPLEADO','NOMBRE','APELLIDO',
                            'CORREO','CELULAR','CELULAR_2',
                            'DIRECCION','ESTADO','CREATED_AT','UPDATED_AT' 
                          ];
    //relaciones
  public function sucursales(){
    return $this->hasMany(Sucursal::class,'EMPLEADO_COD','COD_EMPLEADO');
  }
}
