<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\estado;

class EstadoCont extends Controller
{
    public function Insertar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:100|unique:estado',
        ]);

        if($validator->fails()){
                return response()->json($validator->errors()->toJson(),418);
        }
        $estado = estado::create([
            'id' =>$request->id, 
            'nombre' =>$request->nombre,
            'created_at' =>$request->created_at,
            'updated_at' =>$request->updated_at
        ]);
        return $estado;
    }
    public function Eliminar($id){
        $estado = estado::find($id); 
        $estado->delete();
        return $estado;
    }
    public function Modificar(Request $request, $id)
    {
        $estado = estado::find($id);
        $estado->nombre=$request->nombre;
        $estado->save();
        return $estado;
    }
    public function Mostrar(){
        $estado = estado::all();
        return $estado;
    }
}
