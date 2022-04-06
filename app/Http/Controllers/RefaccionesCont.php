<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\refacciones;

class RefaccionesCont extends Controller
{
    
    public function Insertar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:100|unique:refacciones',
        ]);

        if($validator->fails()){
                return response()->json($validator->errors()->toJson(),418);
        }
        $refacciones = refacciones::create([
            'id' =>$request->id,
            'nombre' =>$request->nombre, 
            'proveedor_id' =>$request->proveedor_id,
            'created_at' =>$request->created_at,
            'updated_at' =>$request->updated_at
        ]);
        return $refacciones;
    }
    public function Eliminar($id){
        $refacciones = refacciones::find($id); 
        $refacciones->delete();
        return $refacciones;
    }
    public function Modificar(Request $request, $id)
    {
        $refacciones = refacciones::find($id);
        $refacciones->nombre=$request->nombre;
        $refacciones->proveedor_id=$request->proveedor_id;
        $refacciones->save();
        return $refacciones;
    }
    public function Mostrar(){
        $refacciones = refacciones::all();
        return $refacciones;
    }
}
