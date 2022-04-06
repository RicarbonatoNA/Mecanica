<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inventario;

class InventarioCont extends Controller
{
    public function Insertar(Request $request)
    {
        $inventario = inventario::create([
            'id' =>$request->id,
            'empleado_id' =>$request->empleado_id,
            'refacciones_id' =>$request->refacciones_id,
            'created_at' =>$request->created_at,
            'updated_at' =>$request->updated_at
        ]);
        return $inventario;
    }
    public function Eliminar($id){
        $inventario = inventario::find($id); 
        $inventario->delete();
        return $inventario;
    }
    public function Modificar(Request $request, $id)
    {
        $inventario = inventario::find($id);
        $inventario->empleado_id=$request->empleado_id;
        $inventario->refacciones_id=$request->refacciones_id;
        $inventario->save();
        return $inventario;
    }
    public function Mostrar(){
        $inventario = inventario::all();
        return $inventario;
    }
}
