<?php

use Illuminate\Database\Seeder;

class AboutBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\About_banner::create([
            'image_logo' => 'nusakita-logo-2.svg',
            'title_en' => 'With the Spirit to Build<br>the Country',
            'title_idn' => 'With the Spirit to Build<br>the Country ID',
            'image_background' => 'banner-about.png',
            'image_float_item1' => 'banner-about-1.png',
            'image_float_item2' => 'banner-about-2.png',
            'image_float_item3' => 'banner-about-3.png',
            'image_float_item4' => 'banner-about-4.png',
        ]);
    }
}
