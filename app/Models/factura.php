<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class factura extends Model
{
    use HasFactory;
    protected $table='factura';
    protected $fillable =['id','servicio_id', 'trabajo_rea_id', 'unidad_id'];
    public $timetamps = false;
}
