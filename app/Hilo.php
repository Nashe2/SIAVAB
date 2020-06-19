<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hilo extends Model
{
    //
    protected $primaryKey = 'hilo_id';
    
    public $fillable=['tipo'];

    public function url(){
        return $this->id ? 'hilo.update' : 'hilo.store';
    }

    //metodo que devolvera el HTTP , para actualizar es PUT y para crear POST

    public function method(){
        return $this->id ? 'PUT' : 'POST';
    }

    public function materials(){
    	return $this->belongsTo('App\Material');
    }

    public function colors(){
        return $this->belongsTo('App\Color');
    }
}
