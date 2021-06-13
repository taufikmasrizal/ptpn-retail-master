<?php

namespace App\Http\Controllers;

use App\About_content;
use Illuminate\Http\Request;

class AboutContentController extends Controller
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
        return view('About_content.create');
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
            'sort' => 'required|numeric',
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
     * @param  \App\About_content  $about_content
     * @return \Illuminate\Http\Response
     */
    public function show(About_content $about_content)
    {
        $about_content = About_content::paginate(5);
        
        return view('About_content.index', compact('about_content'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About_content  $about_content
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about_content = About_content::findOrFail($id);

        return view('About_content.edit', compact('about_content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About_content  $about_content
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
            'sort' => 'required|numeric',
        ]);
        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);
        About_content::whereId($id)->update($validateData);
        return redirect('/About_content/index')->with('success','Data Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About_content  $about_content
     * @return \Illuminate\Http\Response
     */
    public function destroy(About_content $about_content)
    {
        $about_content = About_content::findOrFail($id);
        $about_content->delete();
        return redirect('/About_content/index')->with('Success','Data Berhasil Dihapus');
    }
}
