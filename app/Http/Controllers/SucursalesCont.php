<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\sucursales;

class SucursalesCont extends Controller
{
    public function Insertar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:100|unique:servicio',
            'telefono' => 'required|string|max:10|unique:servicio',
        ]);

        if($validator->fails()){
                return response()->json($validator->errors()->toJson(),418);
        }
        $sucursales = sucursales::create([
            'id' =>$request->id,
            'nombre' =>$request->nombre, 
            'telefono' =>$request->telefono,
            'estado_id' =>$request->estado_id,
            'created_at' =>$request->created_at,
            'updated_at' =>$request->updated_at
        ]);
        return $sucursales;
    }
    public function Eliminar($id){
        $sucursales = sucursales::find($id); 
        $sucursales->delete();
        return $sucursales;
    }
    public function Modificar(Request $request, $id)
    {
        $sucursales = sucursales::find($id);
        $sucursales->nombre=$request->nombre;
        $sucursales->telefono=$request->telefono;
        $sucursales->estado_id=$request->estado_id;
        $sucursales->save();
        return $sucursales;
    }
    public function Mostrar(){
        $sucursales = sucursales::all();
        return $sucursales;
    }
}
