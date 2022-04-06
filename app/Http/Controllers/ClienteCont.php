<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;

class ClienteCont extends Controller
{
    public function Insertar(Request $request)
    {
        $cliente = cliente::create([
            'id' =>$request->id, 
            'user_id' =>$request->user_id,
            'created_at' =>$request->created_at,
            'updated_at' =>$request->updated_at
        ]);
        return $cliente;
    }
    public function Eliminar($id){
        $cliente = cliente::find($id); 
        $cliente->delete();
        return $cliente;
    }
    public function Modificar(Request $request, $id)
    {
        $cliente = cliente::find($id);
        $cliente->user_id=$request->user_id;
        $cliente->save();
        return $cliente;
    }
    public function Mostrar(){
        $cliente = cliente::all();
        return $cliente;
    }
}
