<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    protected $fillable = ['logo','nama'];
    public $timestamps = true;

    public function Mobil(){
    		return $this->hasMany('App\Mobil' , 'merk_id');
    	}


}
