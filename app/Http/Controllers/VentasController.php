<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ventas;
class VentasController extends Controller
{
    //
    public function guardar(Request $request)
    {
        $venta = new ventas;
 
        $venta->cedula = $request->cc;
        $venta->cantidad = $request->can;
        $venta->nombre_producto = $request->nom;
        $venta->precio_unitario = $request->pu;
        $venta->descuento = $request->des;
        $venta->total = $request->total;
        $venta->total_apagar = $request->pagar;
        $venta->save();
    }

    public function actualizar(Request $request)
    {
        $venta = ventas::find($request->id);
 
        $venta->cedula = $request->cc;
        $venta->cantidad = $request->can;
        $venta->nombre_producto = $request->nom;
        $venta->precio_unitario = $request->pu;
        $venta->descuento = $request->des;
        $venta->total = $request->total;
        $venta->total_apagar = $request->pagar;
        $venta->save();
    }

    public function eliminar(Request $request)
    {
        $venta = ventas::find($request->id);
        $venta->delete();
    }

    
    public function index()
    {
        $ventas = ventas::all();
        return $ventas;
    }

    public function select()
    {
        $ventas = ventas::select("id","cedula")->get();
        return $ventas;
    }
}
