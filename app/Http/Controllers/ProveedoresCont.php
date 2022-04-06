<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\proveedores;

class ProveedoresCont extends Controller
{
    public function Insertar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:100|unique:proveedores',
            'telefono' => 'required|string|max:10|unique:proveedores',
        ]);

        if($validator->fails()){
                return response()->json($validator->errors()->toJson(),418);
        }
        $proveedores = proveedores::create([
            'id' =>$request->id, 
            'nombre' =>$request->nombre,
            'telefono' =>$request->telefono,
            'created_at' =>$request->created_at,
            'updated_at' =>$request->updated_at
        ]);
        return $proveedores;
    }
    public function Eliminar($id){
        $proveedores = proveedores::find($id); 
        $proveedores->delete();
        return $proveedores;
    }
    public function Modificar(Request $request, $id)
    {
        $proveedores = proveedores::find($id);
        $proveedores->nombre=$request->nombre;
        $proveedores->telefono=$request->telefono;
        $proveedores->save();
        return $proveedores;
    }
    public function Mostrar(){
        $proveedores = proveedores::all();
        return $proveedores;
    }
}
