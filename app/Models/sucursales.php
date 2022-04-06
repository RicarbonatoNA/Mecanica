<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sucursales extends Model
{
    use HasFactory;
    protected $table='sucursales';
    protected $fillable =['id','nombre','telefono','estado_id'];
    public $timetamps = false;
}
