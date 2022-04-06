<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class traslado extends Model
{
    use HasFactory;
    protected $table='traslado';
    protected $fillable =['id','fecha','sucursal_id', 'refacciones_id'];
    public $timetamps = false;
}
