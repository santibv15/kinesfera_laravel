<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table='users';
    public $timestamps = false;

    protected $primarykey='ID_USUARIO';
    protected $fillable = ['NOMBRES_USUARIO','APELLIDOS_USUARIO','EDAD_USUARIO','TELEFONO_USUARIO','CORREO_USUARIO','CLAVE_USUARIO','ID_CARGO_USUARIO','ESTADO_USUARIO','UPDATED_AT','CREATED_AT'];

}

