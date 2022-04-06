<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trabajo_realizado;

class TrabajoReaCont extends Controller
{
    public function Insertar(Request $request)
    {
        $trabajorea = trabajo_realizado::create([
            'id' =>$request->id,
            'trabajo_id' =>$request->trabajo_id, 
            'unidad_id' =>$request->unidad_id,
            'created_at' =>$request->created_at,
            'updated_at' =>$request->updated_at
        ]);
        return $trabajorea;
    }
    public function Eliminar($id){
        $trabajorea = trabajo_realizado::find($id); 
        $trabajorea->delete();
        return $trabajorea;
    }
    public function Modificar(Request $request, $id)
    {
        $trabajorea = trabajo_realizado::find($id);
        $trabajorea->trabajo_id=$request->trabajo_id;
        $trabajorea->unidad_id=$request->unidad_id;
        $trabajorea->save();
        return $trabajorea;
    }
    public function Mostrar(){
        $trabajorea = trabajo_realizado::all();
        return $trabajorea;
    }
}
