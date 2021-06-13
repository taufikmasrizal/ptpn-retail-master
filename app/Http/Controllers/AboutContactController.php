<?php

namespace App\Http\Controllers;

use App\About_contact;
use Illuminate\Http\Request;

class AboutContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('About_contact.create');
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
            'content_en'=>'required',
            'content_idn'=>'required',
            'link'=>'required',
        ]);
        About_contact::create($request->all());
        return view()->route('About_contact.index')->with('success','Data Berhasil Di Input');
    }
    public function search(Request $request)
    {
        $keyword = $request->search;
        $about_contact = About_contact::where('link','like', "%" . $keyword . "%")->paginate(5);
        return view('About_contact.index', compact('about_contact'));
        
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\About_contact  $about_contact
     * @return \Illuminate\Http\Response
     */
    public function show(About_contact $about_contact)
    {
        $about_contact = About_contact::paginate(5);
        
        return view('About_contact.index', compact('about_contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About_contact  $about_contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about_contact = About_contact::findOrFail($id);

        return view('About_contact.edit', compact('about_contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About_contact  $about_contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'content_en' => 'required',
            'content_idn' => 'required',
            'link' => 'required',
            ]);
            About_contact::whereId($id)->update($validateData);

            return redirect('/About_contact/index')->with('success','Data Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About_contact  $about_contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about_contact = About_contact::findOrFail($id);
       $about_contact->delete();
       return redirect('/About_contact/index')->with('Success','Data Berhasil Dihapus');
    }
}
