<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\traslado;

class TrasladoCont extends Controller
{
    public function Insertar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fecha' => 'required|string|max:100|unique:servicio',
        ]);

        if($validator->fails()){
                return response()->json($validator->errors()->toJson(),418);
        }
        $traslado = traslado::create([
            'id' =>$request->id,
            'fecha' =>$request->fecha, 
            'sucursal_id' =>$request->sucursal_id,
            'refacciones_id' =>$request->refacciones_id,
            'created_at' =>$request->created_at,
            'updated_at' =>$request->updated_at
        ]);
        return $traslado;
    }
    public function Eliminar($id){
        $traslado = traslado::find($id); 
        $traslado->delete();
        return $traslado;
    }
    public function Modificar(Request $request, $id)
    {
        $traslado = traslado::find($id);
        $traslado->fecha=$request->fecha;
        $traslado->sucursal_id=$request->sucursal_id;
        $traslado->refacciones_id=$request->refacciones_id;
        $traslado->save();
        return $traslado;
    }
    public function Mostrar(){
        $traslado = traslado::all();
        return $traslado;
    }
}
