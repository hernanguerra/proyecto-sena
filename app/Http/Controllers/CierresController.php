<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cierres;

class CierresController extends Controller
{
    // 
    public function guardar(Request $request)
    {
        $cierre = new cierres;
 
        $cierre->fecha_inicio = $request->fechaIn;
        $cierre->fecha_final= $request->fechaOu;
        
        $cierre->save();
    }

    public function actualizar(Request $request)
    {
        $cierre = cierres::find($request->id);
 
        $cierre->fecha_inicio = $request->fechaIn;
        $cierre->fecha_final= $request->fechaOu;
        
        $cierre->save();
    }

    public function eliminar(Request $request)
    {
        $cierre = cierres::find($request->id);
        $cierre->delete();
    }

    
    public function index()
    {
        $cierres = cierres::all();
        return $cierres;
    }
    
    public function select()
    {
        $cierres = cierres::select("id","fecha_inicio")->get();
        return $cierres;
    }
  
}
