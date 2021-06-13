<?php

namespace App\Http\Controllers;
use App\AboutBanner; //nama file dan nama class
use Str;
use Illuminate\Http\Request;

class ABController extends Controller
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
        return view('About_banner.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'image_logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title_en' => 'required',
            'title_idn' => 'required',
            'image_background' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_float_item1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_float_item2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_float_item3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_float_item4' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.request()->AboutBanner->getClientOriginalExtension();
        $input['image_logo'] = $imageName;
        $input['image_background'] = $imageName;
        $input['image_float_item1'] = $imageName;
        $input['image_float_item2'] = $imageName;
        $input['image_float_item3'] = $imageName;
        $input['image_float item4'] = $imageName;
        
        request()->AboutBanner->move(public_path('upload'), $imageName);
        


        AboutBanner::create($input);

        return back()
                ->with('success',' Upload Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aboutbanner = AboutBanner::paginate(5);
        
        return view('About_banner.index', compact('aboutbanner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aboutbanner = AboutBanner::findOrFail($id);

        return view('About_banner.edit', compact('aboutbanner'));
    }
public function search(Request $request)
{
    $keyword = $request->search;
    $aboutbanner = AboutBanner::where('title_en','like', "%" . $keyword . "%")->paginate(5);
    return view('About_banner.index', compact('aboutbanner'));
    
}
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'image_logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title_en' => 'required',
            'title_idn' => 'required',
            'image_background' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_float_item1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_float_item2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_float_item3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_float_item4' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        AboutBanner::whereId($id)->update($validateData);
        
        return redirect('About_banner.edit')->with('success','Data Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aboutbanner->delete();
        return redirect()->route('About_banner.index')->with('success','Data Berhasil Dihapus');
    }
}
