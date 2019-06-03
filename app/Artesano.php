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
}
