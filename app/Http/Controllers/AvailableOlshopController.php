<?php

namespace App\Http\Controllers;

use App\Available_olshop;
use Illuminate\Http\Request;

class AvailableOlshopController extends Controller
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
        return view('Available_olshop.create');
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
            'image_icon1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_icon2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_icon3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            
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
     * @param  \App\Available_olshop  $available_olshop
     * @return \Illuminate\Http\Response
     */
    public function show(Available_olshop $available_olshop)
    {
        $available_olshop = Available_olshop::paginate(5);
        
        return view('Available_olshop.index', compact('available_olshop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Available_olshop  $available_olshop
     * @return \Illuminate\Http\Response
     */
    public function edit(Available_olshop $available_olshop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Available_olshop  $available_olshop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Available_olshop $available_olshop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Available_olshop  $available_olshop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Available_olshop $available_olshop)
    {
        //
    }
}
