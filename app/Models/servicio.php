<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicio extends Model
{
    use HasFactory;
    protected $table='servicio';
    protected $fillable =['id','nombre','fecha', 'costo'];
    public $timetamps = false;
}
