<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{

    public function _available($shop_availables)
    {
        # code...
        $text = ''; 
        foreach ($shop_availables as $shop_available){
            $available = \App\Available_olshop:: where('name', $shop_available['name'])->first();
            if ($available) {
                # code...
                $text .= '
                <div class="col my-2">
                    <a href="'. url($shop_available['link']) .'" class="mr-4">
                        <img src="http://localhost/ptpn-retail/public/frontend/img/icon/'.$available->image_icon2.'">
                    </a>
                </div>'; 
            }
        }

        return $text;
    }

    public function locale()
    {
        # code...
        if (session()->has('locale')) {
            # code...
            $locale = session()->get('locale');
        }else{
            $locale = 'en';
        }
        return $locale;
    }

    public function get_product(Request $request)
    {
        # code...
        $data['product'] = \App\Product:: select(['id','title_en', 'title_idn','content_en', 'content_idn', 'slug', 'image_product','theme_color', 'available'])->where('id', $request->key)->first();
        
        
        $data['available'] = $this->_available(json_decode($data['product']->available, TRUE));
        $data['link'] = route('product', $data['product']->slug);
        

        return json_encode($data);
    }

}
