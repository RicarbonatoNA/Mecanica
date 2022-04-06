<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\trabajo;

class TrabajoCont extends Controller
{
    public function Insertar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:100|unique:servicio',
            'fecha' => 'required|string|max:100|unique:servicio',
        ]);

        if($validator->fails()){
                return response()->json($validator->errors()->toJson(),418);
        }
        $trabajo = trabajo::create([
            'id' =>$request->id, 
            'nombre' =>$request->nombre,
            'fecha' =>$request->fecha,
            'created_at' =>$request->created_at,
            'updated_at' =>$request->updated_at
        ]);
        return $trabajo;
    }
    public function Eliminar($id){
        $trabajo = trabajo::find($id); 
        $trabajo->delete();
        return $trabajo;
    }
    public function Modificar(Request $request, $id)
    {
        $trabajo = trabajo::find($id);
        $trabajo->nombre=$request->nombre;
        $trabajo->fecha=$trabajo->fecha;
        $trabajo->save();
        return $trabajo;
    }
    public function Mostrar(){
        $trabajo = trabajo::all();
        return $trabajo;
    }
}
