<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class refacciones extends Model
{
    use HasFactory;
    protected $table='refacciones';
    protected $fillable =['id','nombre','proveedor_id'];
    public $timetamps = false;
}
