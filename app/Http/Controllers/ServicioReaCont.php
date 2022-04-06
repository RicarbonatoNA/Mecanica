<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\servicio_realizado;

class ServicioReaCont extends Controller
{
    public function Insertar(Request $request)
    {
        $serviciorea = servicio_realizado::create([
            'id' =>$request->id,
            'servicio_id' =>$request->servicio_id, 
            'unidad_id' =>$request->unidad_id,
            'created_at' =>$request->created_at,
            'updated_at' =>$request->updated_at
        ]);
        return $serviciorea;
    }
    public function Eliminar($id){
        $serviciorea = servicio_realizado::find($id); 
        $serviciorea->delete();
        return $serviciorea;
    }
    public function Modificar(Request $request, $id)
    {
        $serviciorea = servicio_realizado::find($id);
        $serviciorea->servicio_id=$request->servicio_id;
        $serviciorea->unidad_id=$request->unidad_id;
        $serviciorea->save();
        return $serviciorea;
    }
    public function Mostrar(){
        $serviciorea = servicio_realizado::all();
        return $serviciorea;
    }
}
