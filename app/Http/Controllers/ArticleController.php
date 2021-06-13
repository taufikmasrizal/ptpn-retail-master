<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
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
        return view('Article.create');
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
            'category_id' => 'required|numeric',
            'image_thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'slug' => 'required',
            'title_en' => 'required',
            'title_idn' => 'required',
            'content_en' => 'required',
            'content_idn' => 'required',
            'is_highlight' => 'required|numeric',
            'created_by' => 'required|numeric',
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
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $article = Article::paginate(5);
        
        return view('Article.index', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);

        return view('Article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validateData = $request->validate([
            'category_id' => 'required',
            'image_thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'slug' => 'required',
            'title_en' => 'required',
            'title_idn' => 'required',
            'content_en' => 'required',
            'content_idn' => 'required',
            'is_highlight' => 'required|numeric',
            'created_by' => 'required|numeric',
            ]);
            About_our_value::whereId($id)->update($validateData);

            return redirect('Article.index')->with('success','Data Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect('/Article/index')->with('Success','Data Berhasil Dihapus');
    }
}
