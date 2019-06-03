<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //
     public $fillable=['nombre','paterno','materno','nacimiento','telefono','rfc','sexo'];

    public function url(){
        return $this->id ? 'personas.update' : 'personas.store';
    }

    //metodo que devolvera el HTTP , para actualizar es PUT y para crear POST

    public function method(){
        return $this->id ? 'PUT' : 'POST';
    }
}
