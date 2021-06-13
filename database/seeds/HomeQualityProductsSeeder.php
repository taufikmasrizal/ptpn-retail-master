<?php

use Illuminate\Database\Seeder;

class HomeQualityProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Home_quality_product::create([
            'image_background1' => 'img-content-1.png',
            'image_background2' => 'img-content-2.png',
            'image_background3' => 'img-content-3.png',
            'title_en' => '<span>Get Quality Products Only at Nusakita</span>',
            'title_idn' => '<span>Get Quality Products Only at Nusakita ID</span>',
            'content_en'=> '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>',
            'content_idn'=> '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.(idn)</p>',
            'link'=> '/about'
        ]);
    }
}
