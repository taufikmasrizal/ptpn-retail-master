<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        
        \App\Product::create([
            'category_id' => 1,
            'image_logo' => 'nusakita-logo-white.svg',
            'image_product_banner' => 'image-top-1.png',
            'image_background_banner' => 'bg-product-1.png',
    
            'image_premium_product' => 'image-content-1.png',
            'premium_title_en' => 'Premium Palm Oil',
            'premium_title_idn' => 'Premium Palm Oil ID',
            'premium_content_en' => $content,
            'premium_content_idn' => $content . ' ID',
            
            'advantage_title_en' => 'The Advantages of Cooking Oil',
            'advantage_title_idn' => 'The Advantages of Cooking Oil ID',
            'advantage_content_en' => 
            '<div class="row">
                <div class="col-md-4 text-center py-5 px-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                    <img src="http://localhost/ptpn-retail/public/frontend/img/product/icon-yellow-1.svg">
                    <h5 class="font-weight-bold mt-4">2X Filtering</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    </p>
                </div>
                <div class="col-md-4 text-center py-5 px-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="800">
                    <img src="http://localhost/ptpn-retail/public/frontend/img/product/icon-yellow-2.svg">
                    <h5 class="font-weight-bold mt-4">Premium</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    </p>
                </div>
                <div class="col-md-4 text-center py-5 px-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="1000">
                    <img src="http://localhost/ptpn-retail/public/frontend/img/product/icon-yellow-3.svg">
                    <h5 class="font-weight-bold mt-4">Quality</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    </p>
                </div>
            </div>',

            'advantage_content_idn' => 
            '<div class="row">
                <div class="col-md-4 text-center py-5 px-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                    <img src="http://localhost/ptpn-retail/public/frontend/img/product/icon-yellow-1.svg">
                    <h5 class="font-weight-bold mt-4">2X Filtering</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    </p>
                </div>
                <div class="col-md-4 text-center py-5 px-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="800">
                    <img src="http://localhost/ptpn-retail/public/frontend/img/product/icon-yellow-2.svg">
                    <h5 class="font-weight-bold mt-4">Premium</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    </p>
                </div>
                <div class="col-md-4 text-center py-5 px-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="1000">
                    <img src="http://localhost/ptpn-retail/public/frontend/img/product/icon-yellow-3.svg">
                    <h5 class="font-weight-bold mt-4">Quality</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore ID
                    </p>
                </div>
            </div>',
            
            'image_slider' => 
            json_encode(
                array(
                    array(
                        'image' => 'photo-1-3.png',
                        'content_en' => $content,
                        'content_idn' => $content,
                    ),
                    array(
                        'image' => 'photo-1-4.png',
                        'content_en' => $content,
                        'content_idn' => $content,
                    ),
                    array(
                        'image' => 'photo-1-1.png',
                        'content_en' => $content,
                        'content_idn' => $content,
                    ),
                    array(
                        'image' => 'photo-1-2.png',
                        'content_en' => $content,
                        'content_idn' => $content,
                    ),
                )
            ),
            
            'image_product' => 'minyak.png',
            'image_object_product1' => 'object-1-1.png',
            'image_object_product2' => 'object-1-2.png',
            'image_object_product3' => 'object-1-3.png',
            'title_en' => 'Refined Cooking Oil',
            'title_idn' => 'Refined Cooking Oil',
            'content_en' => $content,
            'content_idn' => $content . ' ID',
            
            'composition_en' => $content,
            'composition_idn' => $content . ' ID',
            'image_nustrition_fact' => 'nutrition-fact.png',
            'image_footer' => 'image-footer-1.png',
            
            'available' => 
            json_encode(
                array(
                    array(
                        'name' => 'tokopedia',
                        'link' => '#',
                    ),
                    array(
                        'name' => 'shopee',
                        'link' => '#',
                    ),
                    array(
                        'name' => 'bukalapak',
                        'link' => '#',
                    ),
                )
            ),
    
            'whatsapp' => '#',
            'title_color' => 'white',
            'theme_color' => 'yellow',
            'slug' => 'refined-cooking-oil',
        ]);
        
        
        \App\Product::create([
            'category_id' => 3,
            'image_logo' => 'nusakita-logo-brown.svg',
            'image_product_banner' => 'image-top-2.png',
            'image_background_banner' => 'bg-product-2.png',
    
            'image_premium_product' => 'image-content-2.png',
            'premium_title_en' => 'Premium Pure Cane Sugar',
            'premium_title_idn' => 'Premium Pure Cane Sugar ID',
            'premium_content_en' => $content,
            'premium_content_idn' => $content . ' ID',
            
            'advantage_title_en' => 'The Advantages of Pure Cane Sugar',
            'advantage_title_idn' => 'The Advantages of Pure Cane Sugar ID',
            'advantage_content_en' => 
            '<div class="row">
                <div class="col-md-4 text-center py-5 px-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                    <img src="http://localhost/ptpn-retail/public/frontend/img/product/icon-dark-green-1.svg">
                    <h5 class="font-weight-bold mt-4">2X Filtering</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    </p>
                </div>
                <div class="col-md-4 text-center py-5 px-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="800">
                    <img src="http://localhost/ptpn-retail/public/frontend/img/product/icon-dark-green-2.svg">
                    <h5 class="font-weight-bold mt-4">Premium</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    </p>
                </div>
                <div class="col-md-4 text-center py-5 px-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="1000">
                    <img src="http://localhost/ptpn-retail/public/frontend/img/product/icon-dark-green-3.svg">
                    <h5 class="font-weight-bold mt-4">Quality</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    </p>
                </div>
            </div>',

            'advantage_content_idn' => 
            '<div class="row">
                <div class="col-md-4 text-center py-5 px-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                    <img src="http://localhost/ptpn-retail/public/frontend/img/product/icon-dark-green-1.svg">
                    <h5 class="font-weight-bold mt-4">2X Filtering</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    </p>
                </div>
                <div class="col-md-4 text-center py-5 px-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="800">
                    <img src="http://localhost/ptpn-retail/public/frontend/img/product/icon-dark-green-2.svg">
                    <h5 class="font-weight-bold mt-4">Premium</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    </p>
                </div>
                <div class="col-md-4 text-center py-5 px-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="1000">
                    <img src="http://localhost/ptpn-retail/public/frontend/img/product/icon-dark-green-3.svg">
                    <h5 class="font-weight-bold mt-4">Quality</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore ID
                    </p>
                </div>
            </div>',
            
            'image_slider' => 
            json_encode(
                array(
                    array(
                        'image' => 'photo-2-1.png',
                        'content_en' => $content,
                        'content_idn' => $content. ' ID',
                    ),
                    array(
                        'image' => 'photo-2-2.png',
                        'content_en' => $content,
                        'content_idn' => $content. ' ID',
                    ),
                    array(
                        'image' => 'photo-2-3.png',
                        'content_en' => $content,
                        'content_idn' => $content. ' ID',
                    ),
                    array(
                        'image' => 'photo-2-4.png',
                        'content_en' => $content,
                        'content_idn' => $content. ' ID',
                    ),
                )
            ),
            
            'image_product' => 'gula.png',
            'image_object_product1' => 'object-2-1.png',
            'image_object_product2' => 'object-2-2.png',
            'image_object_product3' => 'object-2-3.png',
            'title_en' => 'Pure Cane Sugar',
            'title_idn' => 'Pure Cane Sugar',
            'content_en' => $content,
            'content_idn' => $content . ' ID',
            
            'composition_en' => $content,
            'composition_idn' => $content . ' ID',
            'image_nustrition_fact' => 'nutrition-fact.png',
            'image_footer' => 'image-footer-2.png',
            
            'available' => 
            json_encode(
                array(
                    array(
                        'name' => 'tokopedia',
                        'link' => '#',
                    ),
                    array(
                        'name' => 'shopee',
                        'link' => '#',
                    ),
                    array(
                        'name' => 'bukalapak',
                        'link' => '#',
                    ),
                )
            ),
    
            'whatsapp' => '#',
            'title_color' => 'green',
            'theme_color' => 'dark-green',
            'slug' => 'pure-sugar-cane',
        ]);
        
        
        \App\Product::create([
            'category_id' => 2,
            'image_logo' => 'nusakita-logo-brown.svg',
            'image_product_banner' => 'image-top-3.png',
            'image_background_banner' => 'bg-product-3.png',
    
            'image_premium_product' => 'image-content-3.png',
            'premium_title_en' => 'Premium Java Mocha Blend',
            'premium_title_idn' => 'Premium Java Mocha Blend ID',
            'premium_content_en' => $content,
            'premium_content_idn' => $content . ' ID',
            
            'advantage_title_en' => 'The Advantages of Java Mocha Blend',
            'advantage_title_idn' => 'The Advantages of Java Mocha Blend ID',
            'advantage_content_en' => 
            '<div class="row">
                <div class="col-md-4 text-center py-5 px-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                    <img src="http://localhost/ptpn-retail/public/frontend/img/product/icon-brown-1.svg">
                    <h5 class="font-weight-bold mt-4">2X Filtering</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    </p>
                </div>
                <div class="col-md-4 text-center py-5 px-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="800">
                    <img src="http://localhost/ptpn-retail/public/frontend/img/product/icon-brown-2.svg">
                    <h5 class="font-weight-bold mt-4">Premium</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    </p>
                </div>
                <div class="col-md-4 text-center py-5 px-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="1000">
                    <img src="http://localhost/ptpn-retail/public/frontend/img/product/icon-brown-3.svg">
                    <h5 class="font-weight-bold mt-4">Quality</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    </p>
                </div>
            </div>',

            'advantage_content_idn' => 
            '<div class="row">
                <div class="col-md-4 text-center py-5 px-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                    <img src="http://localhost/ptpn-retail/public/frontend/img/product/icon-brown-1.svg">
                    <h5 class="font-weight-bold mt-4">2X Filtering</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    </p>
                </div>
                <div class="col-md-4 text-center py-5 px-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="800">
                    <img src="http://localhost/ptpn-retail/public/frontend/img/product/icon-brown-2.svg">
                    <h5 class="font-weight-bold mt-4">Premium</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    </p>
                </div>
                <div class="col-md-4 text-center py-5 px-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="1000">
                    <img src="http://localhost/ptpn-retail/public/frontend/img/product/icon-brown-3.svg">
                    <h5 class="font-weight-bold mt-4">Quality</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore ID
                    </p>
                </div>
            </div>',
            
            'image_slider' => 
            json_encode(
                array(
                    array(
                        'image' => 'photo-3-1.png',
                        'content_en' => $content,
                        'content_idn' => $content. ' ID',
                    ),
                    array(
                        'image' => 'photo-3-2.png',
                        'content_en' => $content,
                        'content_idn' => $content. ' ID',
                    ),
                    array(
                        'image' => 'photo-3-3.png',
                        'content_en' => $content,
                        'content_idn' => $content. ' ID',
                    ),
                    array(
                        'image' => 'photo-3-4.png',
                        'content_en' => $content,
                        'content_idn' => $content. ' ID',
                    ),
                )
            ),
            
            'image_product' => 'kopi.png',
            'image_object_product1' => 'object-3-1.png',
            'image_object_product2' => 'object-3-2.png',
            'image_object_product3' => 'object-3-3.png',
            'title_en' => 'Java Mocha Blend',
            'title_idn' => 'Java Mocha Blend',
            'content_en' => $content,
            'content_idn' => $content . ' ID',
            
            'composition_en' => $content,
            'composition_idn' => $content . ' ID',
            'image_nustrition_fact' => 'nutrition-fact.png',
            'image_footer' => 'image-footer-3.png',
            
            'available' => 
            json_encode(
                array(
                    array(
                        'name' => 'tokopedia',
                        'link' => '#',
                    ),
                    array(
                        'name' => 'shopee',
                        'link' => '#',
                    ),
                    array(
                        'name' => 'bukalapak',
                        'link' => '#',
                    ),
                )
            ),
    
            'whatsapp' => '#',
            'title_color' => 'white',
            'theme_color' => 'brown',
            'slug' => 'java-mocha-blend',
        ]);
        
        
        \App\Product::create([
            'category_id' => 4,
            'image_logo' => 'nusakita-logo-brown.svg',
            'image_product_banner' => 'image-top-4.png',
            'image_background_banner' => 'bg-product-4.png',
    
            'image_premium_product' => 'image-content-4.png',
            'premium_title_en' => 'Premium Black Tea',
            'premium_title_idn' => 'Premium Black Tea ID',
            'premium_content_en' => $content,
            'premium_content_idn' => $content . ' ID',
            
            'advantage_title_en' => 'The Advantages of Premium Black Tea',
            'advantage_title_idn' => 'The Advantages of Premium Black Tea ID',
            'advantage_content_en' => 
            '<div class="row">
                <div class="col-md-4 text-center py-5 px-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                    <img src="http://localhost/ptpn-retail/public/frontend/img/product/icon-brown-1.svg">
                    <h5 class="font-weight-bold mt-4">2X Filtering</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    </p>
                </div>
                <div class="col-md-4 text-center py-5 px-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="800">
                    <img src="http://localhost/ptpn-retail/public/frontend/img/product/icon-brown-2.svg">
                    <h5 class="font-weight-bold mt-4">Premium</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    </p>
                </div>
                <div class="col-md-4 text-center py-5 px-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="1000">
                    <img src="http://localhost/ptpn-retail/public/frontend/img/product/icon-brown-3.svg">
                    <h5 class="font-weight-bold mt-4">Quality</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    </p>
                </div>
            </div>',

            'advantage_content_idn' => 
            '<div class="row">
                <div class="col-md-4 text-center py-5 px-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                    <img src="http://localhost/ptpn-retail/public/frontend/img/product/icon-brown-1.svg">
                    <h5 class="font-weight-bold mt-4">2X Filtering</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    </p>
                </div>
                <div class="col-md-4 text-center py-5 px-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="800">
                    <img src="http://localhost/ptpn-retail/public/frontend/img/product/icon-brown-2.svg">
                    <h5 class="font-weight-bold mt-4">Premium</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    </p>
                </div>
                <div class="col-md-4 text-center py-5 px-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="1000">
                    <img src="http://localhost/ptpn-retail/public/frontend/img/product/icon-brown-3.svg">
                    <h5 class="font-weight-bold mt-4">Quality</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore ID
                    </p>
                </div>
            </div>',
            
            'image_slider' => 
            json_encode(
                array(
                    array(
                        'image' => 'photo-4-1.png',
                        'content_en' => $content,
                        'content_idn' => $content. ' ID',
                    ),
                    array(
                        'image' => 'photo-4-2.png',
                        'content_en' => $content,
                        'content_idn' => $content. ' ID',
                    ),
                    array(
                        'image' => 'photo-4-3.png',
                        'content_en' => $content,
                        'content_idn' => $content. ' ID',
                    ),
                    array(
                        'image' => 'photo-4-4.png',
                        'content_en' => $content,
                        'content_idn' => $content. ' ID',
                    ),
                )
            ),
            
            'image_product' => 'teh.png',
            'image_object_product1' => 'object-4-1.png',
            'image_object_product2' => 'object-4-2.png',
            'image_object_product3' => 'object-4-3.png',
            'title_en' => 'Premium Black Tea',
            'title_idn' => 'Premium Black Tea',
            'content_en' => $content,
            'content_idn' => $content . ' ID',
            
            'composition_en' => $content,
            'composition_idn' => $content . ' ID',
            'image_nustrition_fact' => 'nutrition-fact.png',
            'image_footer' => 'image-footer-4.png',
            
            'available' => 
            json_encode(
                array(
                    array(
                        'name' => 'tokopedia',
                        'link' => '#',
                    ),
                    array(
                        'name' => 'shopee',
                        'link' => '#',
                    ),
                    array(
                        'name' => 'bukalapak',
                        'link' => '#',
                    ),
                )
            ),
    
            'whatsapp' => '#',
            'title_color' => 'green',
            'theme_color' => 'brown',
            'slug' => 'premium-black-tea',
        ]);
    }
}
