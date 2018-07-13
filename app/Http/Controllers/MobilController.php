<?php

namespace App\Http\Controllers;

use App\Mobil;
use App\Merk;
use App\User;
use Auth;
use Laratrust\LaratrustFacade as Laratrust;

use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil = Mobil::paginate(8);
        if(Laratrust::hasRole('admin')){
            return view('mobil.index',compact('mobil'));
        }
        else if(Laratrust::hasRole('member')){
            $mobil = Auth::user()->Mobil()->paginate(10);
            $jumlah_data = count($mobil['Mobil']);
            return view('member.mobil.index', compact('jumlah_data','mobil'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mobil = Mobil::all();
        $merk = Merk::all();
        $user = User::all();
        if(Laratrust::hasRole('admin')){
            return view('mobil.create',compact('mobil','merk','user'));
        }
        else if(Laratrust::hasRole('member')){
            $mobil = Auth::user()->Mobil()->paginate(10);
            $jumlah_data = count($mobil['Mobil']);
            return view('member.mobil.create', compact('mobil','jumlah_data','merk','user'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required',
            'nama' => 'required',
            'merk_id' => 'required',
            'model' => 'required',
            'lokasi' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'user_id' => 'required',


        ]);

         $mobil = new Mobil;
         $mobil->nama = $request->nama;
         $mobil->merk_id = $request->merk_id;
         $mobil->model = $request->model;
         $mobil->lokasi = $request->lokasi;
         $mobil->alamat = $request->alamat;
         $mobil->no_hp = $request->no_hp;
         $mobil->user_id = $request->user_id;
         if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = str_random(6). '_'.$file->getClientOriginalName();
            $desinationPath = public_path() .DIRECTORY_SEPARATOR. 'img';
            $uploadSucces = $file->move($desinationPath, $filename);
            $mobil->gambar = $filename;
        }
         $mobil->save();
        return redirect()->route('createdetail', $mobil->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $c = Mobil::findOrFail($id);
        $a = Merk::all();
        $selectedMK = Mobil::findOrFail($id)->merk_id;
        return view('mobil.edit',compact('a','b','c','selectedMK'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'gambar' => 'required',
            'nama' => 'required',
            'merk_id' => 'required',
            'model' => 'required',
            'lokasi' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',



        ]);

         $c= Mobil::findOrFail($id);
         $c->nama = $request->nama;
         $c->merk_id = $request->merk_id;
         $c->model = $request->model;
         $c->lokasi = $request->lokasi;
         $mobil->alamat = $request->alamat;
         $c->no_hp = $request->no_hp;
    
         
         if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = str_random(6). '_'.$file->getClientOriginalName();
            $desinationPath = public_path() .DIRECTORY_SEPARATOR. 'img';
            $uploadSucces = $file->move($desinationPath, $filename);
            $c->gambar = $filename;
        }
         $c->save();
        return redirect()->route('mobils.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Mobil::findOrFail($id);
        $a->delete();
        return redirect()->route('mobils.index');
    }

    public function Rekap()
    {
        $a = Mobil::all();
        return view('mobil.terjual',compact('a'));
   
    }

    public function Publish($id)
    {
        $a = Mobil::find($id);

        if ($a->status === 1) {
            $a->status = 0;
        } else {
            $a->status= 1;
        }

        $a->save();
        return redirect()->route('mobils.index');
    }


    public function Terjual($id)
    {
        $a = Mobil::find($id);

        if ($a->statuss === 1) {
            $a->statuss = 0;
        } else {
            $a->statuss= 1;
        }

        $a->save();
        return redirect()->route('mobils.index');
    }

}
