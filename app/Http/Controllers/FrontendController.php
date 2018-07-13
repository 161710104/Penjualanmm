<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mobil;
use App\Detail_mobil;
use App\Berita;
use App\Merk;

class FrontendController extends Controller
{
    public function showpermerk($id){
            $filter = Mobil::where('merk_id','=', $id)->paginate(6);
            return view('frontend.mobil')->with(compact('filter'));
           }

    public function viewdetail($id){
            $DetailView = Detail_mobil::findOrFail($id);
            return view('frontend.detail')->with(compact('DetailView'));
           }

    public function berita($id){
            $beritaku = Berita::findOrFail($id);
          
            return view('frontend.berita.detail')->with(compact('beritaku'));
           }


}
