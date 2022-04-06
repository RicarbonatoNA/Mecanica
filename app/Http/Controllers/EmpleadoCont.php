<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\empleado;

class EmpleadoCont extends Controller
{
    public function Insertar(Request $request)
    {
        $empleado = empleado::create([
            'id' =>$request->id, 
            'user_id' =>$request->user_id,
            'created_at' =>$request->created_at,
            'updated_at' =>$request->updated_at
        ]);
        return $empleado;
    }
    public function Eliminar($id){
        $empleado = empleado::find($id); 
        $empleado->delete();
        return $empleado;
    }
    public function Modificar(Request $request, $id)
    {
        $empleado = empleado::find($id);
        $empleado->user_id=$request->user_id;
        $empleado->save();
        return $empleado;
    }
    public function Mostrar(){
        $empleado = empleado::all();
        return $empleado;
    }
}
