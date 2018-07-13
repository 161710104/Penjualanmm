<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a = Contact::all();
        return view('contact.index',compact('a'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
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
            'alamat' => 'required',
            'negara' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'map' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'instagram' => 'required',
            'youtube' => 'required',


        ]);

        $a = new Contact;
        $a->alamat = $request->alamat;
        $a->negara = $request->negara;
        $a->no_hp = $request->no_hp;
        $a->email = $request->email;
        $a->map = $request->map;
        $a->facebook = $request->facebook;
        $a->twitter = $request->twitter;
        $a->instagram = $request->instagram;
        $a->youtube = $request->youtube;
         
        $a->save();
        return redirect()->route('contact.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $a = Contact::findOrFail($id);
        return view('contact.edit',compact('a'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'alamat' => 'required',
            'negara' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'map' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'instagram' => 'required',
            'youtube' => 'required',


        ]);

        $a = Contact::findOrFail($id);
        
        $a->alamat = $request->alamat;
        $a->negara = $request->negara;
        $a->no_hp = $request->no_hp;
        $a->email = $request->email;
        $a->map = $request->map;
        $a->facebook = $request->facebook;
        $a->twitter = $request->twitter;
        $a->instagram = $request->instagram;
        $a->youtube = $request->youtube;
         
        $a->save();
        return redirect()->route('contact.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $a = Contact::findOrFail($id);      
        $a->delete();        
        return redirect()->route('contact.index');

    }
}
