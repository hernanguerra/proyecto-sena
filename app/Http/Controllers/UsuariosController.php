<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;
class UsuariosController extends Controller
{
    //
    public function guardar(Request $request)
    {
        $usuario = new usuarios;
 
        $usuario->correo_electronico = $request->correo;
        $usuario->contraseña= $request->clave;
        
        $usuario->save();
    }

    public function actualizar(Request $request)
    {
        $usuario = usuarios::find($request->id); 
 
        $usuario->correo_electronico = $request->correo;
        $usuario->contraseña= $request->clave;
        
        $usuario->save();
    }

    public function eliminar(Request $request)
    {
        $usuario = usuarios::find($request->id); 
        $usuario->delete();
    }

    
    public function index()
    {
        $usuarios = usuarios::all();
        return $usuarios;
    }

    public function select()
    {
        $usuarios = usuarios::select("id","contraseña")->get();
        return $usuarios;
    }
}
