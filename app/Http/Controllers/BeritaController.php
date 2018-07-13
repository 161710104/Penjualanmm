<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Berita;
use App\User;
use Auth;
use File;
use Session;
use Laratrust\LaratrustFacade as Laratrust;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Berita $berita)
    {
        $berita = Berita::paginate(8);
        if(Laratrust::hasRole('admin')){
            return view('berita.index',compact('berita'));
        }
        else if(Laratrust::hasRole('member')){
            $berita = Auth::user()->Berita()->paginate(10);
            $jumlah_data = count($berita['Berita']);
            return view('member.berita.index', compact('jumlah_data','berita'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $berita = Berita::all();
        $user = User::all();
        if(Laratrust::hasRole('admin')){
            return view('berita.create',compact('berita','user'));
        }
        else if(Laratrust::hasRole('member')){
            $berita = Auth::user()->Berita()->paginate(10);
            $jumlah_data = count($berita['Berita']);
            return view('member.berita.create', compact('berita', 'jumlah_data','user'));
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
            'judul' => 'required',
            'isi' => 'required',
            'user_id'=>'max:255|required',


        ]);

         $beritas = new Berita;
         $beritas->judul = $request->judul;
         $beritas->isi = $request->isi;
         $beritas->user_id = $request->user_id;
         if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = str_random(6). '_'.$file->getClientOriginalName();
            $desinationPath = public_path() .DIRECTORY_SEPARATOR. 'img';
            $uploadSucces = $file->move($desinationPath, $filename);
            $beritas->gambar = $filename;
        }
         $beritas->save();
         Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$beritas->judul</b>"
        ]);
        return redirect()->route('beritas.index');
    }

    /**
     * Display the specified resource.
        *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function showmember($id)
    {
        $beritas = Berita::findOrFail($id);
        return view('member.berita.show',compact('beritas'));
    }

     public function show($id)
    {
        $beritas = Berita::findOrFail($id);
        return view('berita.show',compact('beritas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Laratrust::hasRole('admin')){
            $beritas = Berita::findOrFail($beritaS->id);
            return view('berita.edit',compact('beritas'));
        }
        else if(Laratrust::hasRole('member')){
            $beritas = Berita::findOrFail($beritaS->id);
            return view('member.berita.edit', compact('beritas'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'gambar' => 'required',
            'judul' => 'required',
            'isi' => 'required',


        ]);

         $beritas = Berita::findOrFail($id);
         $beritas->gambar = $request->gambar;
         $beritas->judul = $request->judul;
         $beritas->isi = $request->isi;
         // edit upload gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path().'img';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
    
        // hapus gambar lama, jika ada
        if ($beritas->gambar) {
        $old_foto = $beritas->gambar;
        $filepath = public_path() . DIRECTORY_SEPARATOR . 'img'
        . DIRECTORY_SEPARATOR . $beritas->gambar;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
        $beritas->gambar = $filename;
    }
     $beritas->save();
        // dd($beritas);
        return redirect()->route('beritas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $beritas = Berita::findOrFail($id);
        $beritas->delete();
        return redirect()->route('beritas.index');
    }

    public function Publish($id)
    {
        $berita = Berita::find($id);

        if ($berita->status === 1) {
            $berita->status = 0;
        } else {
            $berita->status= 1;
        }

        $berita->save();
        return redirect()->route('beritas.index');
    }

    public function alasan_store(Request $request)
    {
        $request->validate([
            'alasan' => 'required',


        ]);

         $beritas = new Mobil;
         $beritas->alasan = $request->alasan;
         $beritas->save();
        return redirect()->route('mobils.index');
    }

}
