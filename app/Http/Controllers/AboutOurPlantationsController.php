<?php

namespace App\Http\Controllers;

use App\About_our_plantation;
use Illuminate\Http\Request;

class AboutOurPlantationsController extends Controller
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
        return view('About_our_plantation.create');
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
            'image_background' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title_en' => 'required',
            'title_idn' => 'required',
            'content_en' => 'required',
            'content_idn' => 'required',
            
        ]);
  
        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);
   
        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About_our_plantation  $about_our_plantations
     * @return \Illuminate\Http\Response
     */
    public function show(About_our_plantation $about_our_plantations)
    {
        $about_our_plantations = About_our_plantation::paginate(5);
        
        return view('About_our_plantation.index', compact('about_our_plantations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About_our_plantation  $about_our_plantations
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about_our_plantations = About_our_plantation::findOrFail($id);

        return view('About_our_plantation.edit', compact('about_our_plantations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About_our_plantations  $about_our_plantations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image_background' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title_en' => 'required',
            'title_idn' => 'required',
            'content_en' => 'required',
            'content_idn' => 'required',
        ]);
        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);
        About_content::whereId($id)->update($validateData);
        return redirect('/About_our_plantation/index')->with('success','Data Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About_our_plantations  $about_our_plantations
     * @return \Illuminate\Http\Response
     */
    public function destroy(About_our_plantations $about_our_plantations)
    {
        $about_our_plantations = About_our_plantations::findOrFail($id);
        $about_our_plantations->delete();
        return redirect('/About_our_plantation/index')->with('Success','Data Berhasil Dihapus');
    }
}
