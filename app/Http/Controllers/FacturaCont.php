<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\factura;

class FacturaCont extends Controller
{
    public function Insertar(Request $request)
    {
        $factura = factura::create([
            'id' =>$request->id,
            'servicio_id' =>$request->servicio_id,
            'trabajo_rea_id' =>$request->trabajo_rea_id,
            'unidad_id' =>$request->unidad_id,
            'created_at' =>$request->created_at,
            'updated_at' =>$request->updated_at
        ]);
        return $factura;
    }
    public function Eliminar($id){
        $factura = factura::find($id); 
        $factura->delete();
        return $factura;
    }
    public function Modificar(Request $request, $id)
    {
        $factura = factura::find($id);
        $factura->servicio_id=$request->servicio_id;
        $factura->trabajo_rea_id=$request->trabajo_rea_id;
        $factura->unidad_id=$request->unidad_id;
        $factura->save();
        return $factura;
    }
    public function Mostrar(){
        $factura = factura::all();
        return $factura;
    }
}
