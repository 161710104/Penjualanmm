<?php

namespace App\Http\Controllers;

use App\Merk;
use File;
use Illuminate\Http\Request;

class MerkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a = Merk::all();
        return view('merk.index',compact('a'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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

        ]);

         $merks = new Merk;
         $merks->nama = $request->nama;

         
         if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = str_random(6). '_'.$file->getClientOriginalName();
            $desinationPath = public_path() .DIRECTORY_SEPARATOR. 'img';
            $uploadSucces = $file->move($desinationPath, $filename);
            $merks->gambar = $filename;
        }
         $merks->save();
        return redirect()->route('merkmobil.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $a = Merk::findOrFail($id);
        return view('merk.show',compact('a'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $a = Merk::findOrFail($id);
        return view('merk.edit',compact('a'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'required',
            'nama' => 'required',

        ]);

         $a = Merk::find($id);
         $a->update($request->all());

         if ($request->hasFile('gambar')) {
        $uploaded_foto = $request->file('gambar');
        $extension = $uploaded_foto->getClientOriginalExtension();
        $filename = md5(time()) . '.' . $extension;
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
        $uploaded_foto->move($destinationPath, $filename);
        $a->gambar = $filename;
        $a->save();
        }
         $a->save();
        return redirect()->route('merkmobil.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Merk $merk)
    {
        $merk = Merk::findOrFail($merk->id);
        if ($merk->gambar){
            $old_foto = $merk->gambar;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . $a->gambar;

            try{
            File::delete($filepath);
            } catch (FileNotFoundException $e){

            }
        }
        $merk->delete();
        return redirect()->route('merkmobil.index');
    }
}
