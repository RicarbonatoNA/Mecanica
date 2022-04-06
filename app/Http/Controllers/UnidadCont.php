<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\unidad;

class UnidadCont extends Controller
{
    public function Insertar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'modelo' => 'required|string|max:100|unique:unidad',
            'marca' => 'required|string|max:100|unique:unidad'
        ]);

        if($validator->fails()){
                return response()->json($validator->errors()->toJson(),418);
        }
        $unidad = unidad::create([
            'id' =>$request->id, 
            'modelo'=>$request->modelo,
            'marca' =>$request->marca,
            'cliente_id' =>$request->cliente_id,
            'created_at' =>$request->created_at,
            'updated_at' =>$request->updated_at
        ]);
        return $unidad;
    }
    public function Eliminar($id){
        $unidad = unidad::find($id); 
        $unidad->delete();
        return $unidad;
    }
    public function Modificar(Request $request, $id)
    {
        $unidad = unidad::find($id);
        $unidad->modelo=$request->modelo;
        $unidad->marca=$request->marca;
        $unidad->cliente_id=$unidad->cliente_id;
        $unidad->save();
        return $unidad;
    }
    public function Mostrar(){
        $unidad = unidad::all();
        return $unidad;
    }
}
