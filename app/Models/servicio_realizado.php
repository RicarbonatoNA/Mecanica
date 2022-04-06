<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicio_realizado extends Model
{
    use HasFactory;
    protected $table='servicio_realizado';
    protected $fillable =['id','servicio_id', 'unidad_id'];
    public $timetamps = false;
}
