<?php

namespace App\Http\Controllers;

use App\About_our_value;
use Illuminate\Http\Request;

class AboutOurValuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('About_our_value.create');
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
        ]);
        About_our_value::create($request->all());
        return view()->route('About_our_value.index')->with('success','Data Berhasil Di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About_our_values  $about_our_values
     * @return \Illuminate\Http\Response
     */
    public function show(About_our_value $about_our_values)
    {
        $about_our_values = About_our_value::paginate(5);
        
        return view('About_our_value.index', compact('about_our_values'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About_our_values  $about_our_values
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about_our_values = About_our_value::findOrFail($id);

        return view('About_our_value.edit', compact('about_our_values'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About_our_value  $about_our_values
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'content_en' => 'required',
            'content_idn' => 'required',
            
            ]);
            About_our_value::whereId($id)->update($validateData);

            return redirect('About_our_value.index')->with('success','Data Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About_our_value  $about_our_values
     * @return \Illuminate\Http\Response
     */
    public function destroy(About_our_value $about_our_values)
    {
        $about_our_value = About_our_value::findOrFail($id);
        $about_our_value->delete();
        return redirect('/About_our_value/index')->with('Success','Data Berhasil Dihapus');
    }
}
