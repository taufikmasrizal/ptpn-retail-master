<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChangeLanguageController extends Controller
{
    public function index(request $request)
    {
        # code...
        if ($request->lang == "idn") {
            # code...
            session()->put('locale', 'idn');
        }else {
            # code...
            session()->put('locale', 'en');
        }
        
        return redirect()->back();
    }
}
