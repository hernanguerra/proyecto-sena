<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inventarios;
class InventariosController extends Controller
{
    //
    public function guardar(Request $request)
    {
        $inventario = new inventarios;
 
        $inventario->fecha_inicio = $request->fechaIn;
        $inventario->fecha_final= $request->fechaOu;
        
        $inventario->save();
    }
    
    public function actualizar(Request $request)
    {
        $inventario = inventarios::find($request->id);
 
        $inventario->fecha_inicio = $request->fechaIn;
        $inventario->fecha_final= $request->fechaOu;
        
        $inventario->save();
    }

    public function eliminar(Request $request)
    {
        $inventario = inventarios::find($request->id);
        $inventario->delete();
    }

    
    public function index()
    {
        $inventarios = inventarios::all();
        return $inventarios;
    }

    public function select()
    {
        $inventarios = inventarios::select("id","fecha_inicio")->get();
        return $inventarios;
    }
}
