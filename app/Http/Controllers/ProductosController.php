<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;
class ProductosController extends Controller
{
    //
    public function guardar(Request $request)
    {
        $producto = new productos;
 
        $producto->ProNombre = $request->producto;
        $producto->ProDescripcion= $request->descrip;
        $producto->ProCantidad = $request->can;
        $producto->ProPrecioVenta = $request->precioVen;
        $producto->ProCodigo = $request->qr;
        $producto->ProStop = $request->alto;
        $producto->Prolow = $request->bajo;
        $producto->ProPrecioCompra = $request->PrecioCom;
        $producto->save();
    }

    public function actualizar(Request $request)
    {
        $producto = productos::find($request->id); 
 
        $producto->ProNombre = $request->producto;
        $producto->ProDescripcion= $request->descrip;
        $producto->ProCantidad = $request->can;
        $producto->ProPrecioVenta = $request->precioVen;
        $producto->ProCodigo = $request->qr;
        $producto->ProStop = $request->alto;
        $producto->Prolow = $request->bajo;
        $producto->ProPrecioCompra = $request->PrecioCom;
        $producto->save();
    }

    public function eliminar(Request $request)
    {
        $producto = productos::find($request->id); 
        $producto->delete();
    }

    
    public function index()
    {
        $productos = productos::all();
        return $productos;
    }

    public function select()
    {
        $productos = productos::select("id","ProNombre")->get();
        return $productos;
    }
}
