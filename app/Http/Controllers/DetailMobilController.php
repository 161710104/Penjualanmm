<?php

namespace App\Http\Controllers;

use App\Detail_mobil;
use App\Mobil;
use App\User;
use Auth;
use Laratrust\LaratrustFacade as Laratrust;

use Illuminate\Http\Request;

class DetailMobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a = Detail_mobil::with('Mobil')->get();
        if(Laratrust::hasRole('admin')){
            return view('detail_mobil.index',compact('a'));
        }
        else if(Laratrust::hasRole('member')){
            $a = Auth::user()->Detail_mobil()->paginate(10);
            $jumlah_data = count($a['Detail_mobil']);
            return view('member.detail_mobil.index', compact('a', 'jumlah_data'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $mobil = Mobil::findOrFail($id);
        if(Laratrust::hasRole('admin')){
            return view('detail_mobil.create',compact('mobil'));
        }
        else if(Laratrust::hasRole('member')){
            return view('member.detail_mobil.create', compact('mobil'));
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
            'mobil_id' => 'required',
            'warna' => 'required',
            'transmisi' => 'required',
            'varian' => 'required',
            'cakupan_mesin' => 'required',
            'penumpang' => 'required',
            'kilometer' => 'required',
            'tahun_keluar' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'user_id' => 'required',

        ]);


         $detail_mobil = new Detail_mobil;
         $detail_mobil->mobil_id = $request->mobil_id;
         $detail_mobil->warna = $request->warna;
         $detail_mobil->transmisi = $request->transmisi;
         $detail_mobil->varian = $request->varian;
         $detail_mobil->cakupan_mesin = $request->cakupan_mesin;
         $detail_mobil->penumpang = $request->penumpang;
         $detail_mobil->kilometer = $request->kilometer;
         $detail_mobil->tahun_keluar = $request->tahun_keluar;
         $detail_mobil->harga = $request->harga;
         $detail_mobil->deskripsi = $request->deskripsi;
         $detail_mobil->user_id = $request->user_id;
         $detail_mobil->save();
         return redirect()->route('mobils.index');
         
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\detail_mobil  $detail_mobil
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\detail_mobil  $detail_mobil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $a = Detail_mobil::findOrFail($id);
        $b = Mobil::all();
        $selectedMO = Detail_mobil::findOrFail($id)->mobil_id;
        return view('detail_mobil.edit',compact('a','b','selectedMO'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\detail_mobil  $detail_mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detail_mobil $detail_mobil)
    {
        $request->validate([
            'mobil_id' => 'required',
            'warna' => 'required',
            'transmisi' => 'required',
            'varian' => 'required',
            'cakupan_mesin' => 'required',
            'penumpang' => 'required',
            'kilometer' => 'required',
            'tahun_keluar' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
        ]);

        $a->update($request->all());
        $a->save();
        return redirect()->route('detail_mobil.index');
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\detail_mobil  $detail_mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Detail_mobil::findOrFail($id);
        $a->delete();
        return redirect()->route('detail_mobil.index');
    }

    public function memberindex()
    {
        $a = Detail_mobil::with('Mobil')->get();
        return view('member.detail_mobil.index',compact('a'));
   
    }

}
