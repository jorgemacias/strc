<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

// Este es para el login 
use Illuminate\Foundation\Auth\User as Authenticatable;


class Usuario extends Authenticatable 
{
    use SoftDeletes;
    use Userstamps;
    
//Nombre definitivo de la tabla que afecta el modelo     
    protected $table = "usuarios";

//    Campos que se pueden afectar an la tabla
//    protected $fillable = array('Nombre, Correo, Password, Estatus');

//    Campos restringidos en la tabla 
    protected $guarded = ["Password_confirmation"];
    
    // Bandera de borrado en las tablas 
    protected $dates = ['deleted_at'];
    
//    Relaciones con otros modelo 
    
    public function rol() {
        return $this->hasOne('App\Rol', 'id', 'rol_id');
    }
    
    public function dependencia() {
        return $this->hasOne('App\Dependencia', 'dependencia_id', 'id');
    }
}
