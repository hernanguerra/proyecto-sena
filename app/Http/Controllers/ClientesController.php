<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;

class ClientesController extends Controller
{
    //
    public function guardar(Request $request)
    {
        $cliente = new clientes;
 
        $cliente->CliCedula = $request->cc;
        $cliente->CliNombre = $request->nom;
        $cliente->CliApellido = $request->ape;
        $cliente->CliTelefono = $request->tel;
        $cliente->CliDireccion = $request->dir;
        $cliente->CliCorreo = $request->correo;
        $cliente->save();
    }

    public function actualizar(Request $request)
    {
        $cliente = clientes::find($request->id);   
 
        $cliente->CliCedula = $request->cc;
        $cliente->CliNombre = $request->nom;
        $cliente->CliApellido = $request->ape;
        $cliente->CliTelefono = $request->tel;
        $cliente->CliDireccion = $request->dir;
        $cliente->CliCorreo = $request->correo;
        $cliente->save();
    }

    public function eliminar(Request $request)
    {
        $cliente = clientes::find($request->id);   
        $cliente->delete();
    }

    public function index()
    {
        $clientes = clientes::all();   
        return $clientes;
    }

    public function select()
    {                      
        $clientes = clientes::select('id','CliNombre')->get();   
        return ['data'=>$clientes];
    }
   
}
