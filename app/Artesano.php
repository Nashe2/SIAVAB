<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artesano extends Model
{
    //
    protected $primaryKey = 'artesano_id';

    public function creacionMaterial(){
       return $this->hasMany(CreacionMaterial::class);
    }

    public $fillable=['categoria', 'discapacidad', 'persona_id'];

    public function url(){
        return $this->id ? 'artesano.update' : 'artesano.store';
    }

    //metodo que devolvera el HTTP , para actualizar es PUT y para crear POST

    public function method(){
        return $this->id ? 'PUT' : 'POST';
    }

    public function personas() {
        return $this->belongsTo('App\Persona');
    }

}
