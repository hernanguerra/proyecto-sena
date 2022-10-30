<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    /* protected $table = 'clientes';
    protected $fillable = ['id','cliCedula','CliNombre','CliApellido','CliTelefono','CliDireccion','CliCorreo'];
    public $timestamps = false; */
    use HasFactory;
}
