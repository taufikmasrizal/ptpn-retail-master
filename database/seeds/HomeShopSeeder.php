<?php

use Illuminate\Database\Seeder;

class HomeShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Home_shop::create([
            'image_background' => 'shop-image.png',
            'title_en' => 'Shop',
            'title_idn' => 'Toko',
            'content_en' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'content_idn' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ID',
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
        ]);
    }
}
