<?php

use Illuminate\Database\Seeder;

class AvailableOlshopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Available_olshop::create([
            'image_icon1' => 'tokopedia-shop.svg',
            'image_icon2' => 'tokopedia.svg',
            'image_icon3' => 'tokopedia-product.svg',
            'name' => 'tokopedia',
        ]);
        \App\Available_olshop::create([
            'image_icon1' => 'shopee-shop.svg',
            'image_icon2' => 'shopee.svg',
            'image_icon3' => 'shopee-product.svg',
            'name' => 'shopee',
        ]);
        \App\Available_olshop::create([
            'image_icon1' => 'bukalapak-shop.svg',
            'image_icon2' => 'bukalapak.svg',
            'image_icon3' => 'bukalapak-product.svg',
            'name' => 'bukalapak',
        ]);
    }
}
