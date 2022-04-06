<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedores extends Model
{
    use HasFactory;
    protected $table='proveedores';
    protected $fillable =['id','nombre', 'telefono'];
    public $timetamps = false;
}
