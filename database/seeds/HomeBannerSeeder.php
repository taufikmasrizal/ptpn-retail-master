<?php

use Illuminate\Database\Seeder;

class HomeBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Home_banner::create([
            'image_banner' => 'banner-5.png',
            'sort' => 1,
            'is_active' => 1,
        ]);
        \App\Home_banner::create([
            'image_banner' => 'banner-3.png',
            'sort' => 2,
            'is_active' => 1,
        ]);
        \App\Home_banner::create([
            'image_banner' => 'banner-4.png',
            'sort' => 3,
            'is_active' => 1,
        ]);
        \App\Home_banner::create([
            'image_banner' => 'banner-2.png',
            'sort' => 4,
            'is_active' => 1,
        ]);
    }
}
