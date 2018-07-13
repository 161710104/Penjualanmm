<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = ['gambar','judul','isi','tanggal_rilis','user_id','publish'];
    public $timestamps = true;

     public function User(){
   	return $this->belongsTo('App\User','user_id');
    }

}
