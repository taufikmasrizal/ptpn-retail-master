<?php

use Illuminate\Database\Seeder;

class HomeProfileVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Home_profile_video::create([
            'image_background' => 'bg-intro.png',
            'image_logo' => 'product-indonesia.svg',
            'title_en' => '<img src="http://localhost/ptpn-retail/public/frontend/img/icon/title-icon.svg"> <h2 class="px-3 mb-0"><span>Nusakita</span> For Indonesia</h2>',
            'title_idn' => '<img src="http://localhost/ptpn-retail/public/frontend/img/icon/title-icon.svg"> <h2 class="px-3 mb-0"><span>Nusakita</span> For Indonesia idn</h2>',
            'link'=> 'https://www.youtube.com/watch?v=6YdhpHFe2gQ',
            'content_en'=> '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>',
            'content_idn'=> '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.(idn)</p>',
        ]);
    }
}
