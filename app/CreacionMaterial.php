<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreacionMaterial extends Model
{
    //
    	public function artesano(){
  	    return $this->belongsTo(Artesano::class); 	 	
  	}
}
