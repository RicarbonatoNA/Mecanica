<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\servicio;

class ServicioCont extends Controller
{
    public function Insertar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:100|unique:servicio',
            'fecha' => 'required|string|max:100|unique:servicio',
            'costo' => 'required|string|max:10|unique:servicio',
        ]);

        if($validator->fails()){
                return response()->json($validator->errors()->toJson(),418);
        }
        $servicio = servicio::create([
            'id' =>$request->id, 
            'nombre' =>$request->nombre,
            'fecha' =>$request->fecha,
            'costo' =>$request->costo,
            'created_at' =>$request->created_at,
            'updated_at' =>$request->updated_at
        ]);
        return $servicio;
    }
    public function Eliminar($id){
        $servicio = servicio::find($id); 
        $servicio->delete();
        return $servicio;
    }
    public function Modificar(Request $request, $id)
    {
        $servicio = servicio::find($id);
        $servicio->nombre=$request->nombre;
        $servicio->fecha=$servicio->fecha;
        $servicio->costo=$servicio->costo;
        $servicio->save();
        return $servicio;
    }
    public function Mostrar(){
        $servicio = servicio::all();
        return $servicio;
    }
}
