<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreacionMaterial extends Model
{
    //
    	public function artesano(){
  	    return $this->belongsTo(Artesano::class);
  	}

  	public $fillable=['fecha', 'artesano_id'];

 	public function url(){
        return $this->id ? 'creacionmaterial.update' : 'creacionmaterial.store';
    }

    //metodo que devolvera el HTTP , para actualizar es PUT y para crear POST

    public function method(){
        return $this->id ? 'PUT' : 'POST';
    }

    public function materials(){
        return $this->belongsToMany('App\Material', 'uso_materials','creacion_id')->withPivot('cantidad')->withTimestamps();
    }
}
