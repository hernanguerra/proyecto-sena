<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clientes;

class ClientesController extends Controller
{
    //
    public function guardar(Request $request)
    {
        // Validate the request...
 
        $cliente = new clientes;
 
        $cliente->CliCedula = $request->cc;
        $cliente->CliNombre = $request->nom;
        $cliente->CliApellido = $request->ape;
        $cliente->CliTelefono = $request->tel;
        $cliente->CliDireccion = $request->dir;
        $cliente->CliCorreo = $request->correo;
        $cliente->save();
    }
}
