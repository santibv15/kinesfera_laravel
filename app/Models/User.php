<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table='USUARIO';
    protected $primarykey='ID_USUARIO';
    protected $fillable = ['NOMBRES_USUARIO','APELLIDOS_USUARIO','EDAD_USUARIO','TELEFONO_USUARIO','CORREO_USUARIO','CLAVE_USUARIO','ID_CARGO_USUARIO','ESTADO_USUARIO'];

}

