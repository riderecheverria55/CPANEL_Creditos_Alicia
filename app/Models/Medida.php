<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medida extends Model
{
    use HasFactory;
    protected $table = 'tbl_medida';
    protected $primaryKey = 'COD_MEDIDA';
    protected $fillable = ['COD_MEDIDA','NOMBRE_MEDIDA','SIGLA_MEDIDA','ESTADO'];
}
