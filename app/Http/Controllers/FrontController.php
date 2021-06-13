<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller {

    public function _get_general_content()
    {
        # code...
        if (session()->has('locale')) {
            # code...
            $data['locale'] = session()->get('locale');
        }else{
            $data['locale'] = 'en';
        }
        $data['general_products'] = \App\Product:: select(['id','title_en', 'title_idn','content_en', 'content_idn', 'slug', 'image_product', 'theme_color'])->get();
        $data['general_categories_products'] = \App\Category_product:: with('product')->select(['id', 'title_en', 'title_idn'])->orderBy('sort', 'asc')->get();


        $data['footer_menus'] = \App\Footer_menu:: select(['title_en', 'title_idn', 'link'])->orderBy('sort', 'asc')->get();


        \App::setLocale($data['locale']);

        return $data;
    }

    public function _available($shop_availables)
    {
        $data = [];
        foreach ($shop_availables as $shop_available){
            $available = \App\Available_olshop:: where('name', $shop_available['name'])->first();
            if ($available) {
                # code...
                $available = array(
                    'name' => $shop_available['name'],
                    'image1' => $available->image_icon1,
                    'image2' => $available->image_icon2,
                    'image3' => $available->image_icon3,
                    'link' => $shop_available['link'],
                );
                array_push($data, $available);
            }
        }

        return $data;
    }

    public function index() {
        $data = $this->_get_general_content();
        $data['home_banners'] = \App\Home_banner:: where('is_active', 1)->orderBy('sort', 'asc')->get();
        $data['home_profile_video'] = \App\home_profile_video:: latest()->first();
        $data['home_quality_product'] = \App\Home_quality_product:: latest()->first();
        $data['promotion_1'] =  \App\Promotion:: where('sort', 1)->latest()->first();
        $data['promotion_2'] =  \App\Promotion:: where('sort', 2)->latest()->first();
        $data['promotion_3'] =  \App\Promotion:: where('sort', 3)->latest()->first();
        $data['home_our_videos'] =  \App\Home_our_video:: where('is_active', 1)->latest()->get();
        $data['home_shop'] =  \App\Home_shop:: latest()->first();
        $data['home_availables'] = $this->_available(json_decode($data['home_shop']->available, TRUE));

        return view('frontend.index')->with($data);
    }

    public function about() {
        $data = $this->_get_general_content();
        $data['about_banners'] = \App\AboutBanner:: latest()->first();
        $data['about_our_plantations'] = \App\About_our_plantation:: latest()->first();
        $data['about_our_values'] = \App\About_our_value:: latest()->first();
        $data['about_contents'] = \App\About_content:: orderBy('sort', 'asc')->get();
        $data['about_contacts'] = \App\About_contact:: latest()->first();
        return view('frontend.about')->with($data);
    }

    public function contact() {
        $data = $this->_get_general_content();
        $data['contacts'] = \App\Contact:: latest()->first();
        return view('frontend.contact')->with($data);
    }

    public function article(Request $request) {
        $data = $this->_get_general_content();
        $data['c_search'] = $request->c;

        $data['category_articles'] = \App\Category_article:: orderBy('sort', 'asc')->get();
        $data['article_highlights'] = \App\Article:: select(["image_thumbnail", "slug", "title_en", "title_idn", "content_en", "content_idn", "created_by", "created_at"])->latest()->where('is_highlight', 1)->get();

        if($data['c_search']){
            $category = \App\Category_article:: select('id')->where('slug', $data['c_search'])->firstOrFail();
            $data['articles'] = \App\Article:: select(["image_thumbnail", "slug", "title_en", "title_idn", "created_by", "created_at"])->latest()->where('category_id', $category->id)->where('is_highlight', 0)->paginate(6);
        }else{
            $data['articles'] = \App\Article:: select(["image_thumbnail", "slug", "title_en", "title_idn", "created_by", "created_at"])->latest()->where('is_highlight', 0)->paginate(6);
        }

        if ($request->page > $data['articles']->lastPage()) {
            # code...
            abort(404);
        }

        return view('frontend.article')->with($data);
    }

    public function article_detail($slug) {
        $data = $this->_get_general_content();

        $data['article'] = \App\Article:: where('slug', $slug)->firstOrFail();

        $data['article_prev'] = \App\Article:: where('id', '<', $data['article']->id)->max('id');
        if (!empty($data['article_prev'])) {
            # code...
            $data['article_prev'] = \App\Article:: select(['image_thumbnail', 'slug'])->where('id', $data['article_prev'])->first();
        }else{
            $data['article_prev'] = \App\Article:: max('id');
            $data['article_prev'] = \App\Article:: select(['image_thumbnail', 'slug'])->where('id', $data['article_prev'])->first();
        }

        $data['article_next'] = \App\Article:: where('id', '>', $data['article']->id)->min('id');
        if (!empty($data['article_next'])) {
            # code...
            $data['article_next'] = \App\Article:: select(['image_thumbnail', 'slug'])->where('id', $data['article_next'])->first();
        }else{
            $data['article_next'] = \App\Article:: min('id');
            $data['article_next'] = \App\Article:: select(['image_thumbnail', 'slug'])->where('id', $data['article_next'])->first();
        }

        $data['related_posts'] = \App\Article:: select(['image_thumbnail','title_en','title_idn', 'slug', 'created_at'])->where("category_id", $data['article']->category_id)->latest()->take(6)->get();

        return view('frontend.article-detail')->with($data);
    }

    public function product($product) {
        $data = $this->_get_general_content();
        $data['product'] = \App\Product:: with('history')->where('slug', $product)->first();
        if(!$data['product']){
            abort(404);
        }else{
            $data['availables'] = $this->_available(json_decode($data['product']->available, TRUE));
            return view('frontend.product')->with($data);
        }
    }

    public function privacy_policy() {
        $data = $this->_get_general_content();

        return view('frontend.privacy-policy')->with($data);
    }

}
