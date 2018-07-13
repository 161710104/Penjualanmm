<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $fillable = ['gambar','nama','merk_id','model','lokasi','no_hp','publish'];
    public $timestamps = true;

    //------------------------------------------------

    	public function Merk(){
    		return $this->belongsTo('App\Merk' , 'merk_id');
    	}


    	public function detail_mobil(){
    		return $this->hasOne('App\Detail_mobil' , 'mobil_id');
    	}

    	 public function User(){
   		return $this->belongsTo('App\User' , 'user_id');
    	}




}
