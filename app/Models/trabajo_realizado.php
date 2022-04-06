<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trabajo_realizado extends Model
{
    use HasFactory;
    protected $table='trabajo_realizado';
    protected $fillable =['id','trabajo_id', 'unidad_id'];
    public $timetamps = false;
}
