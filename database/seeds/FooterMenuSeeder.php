<?php

use Illuminate\Database\Seeder;

class FooterMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Footer_menu::create([
            'title_en' => 'Home',
            'title_idn' => 'Beranda',
            'link' => '',
            'sort' => 1,
        ]);
        \App\Footer_menu::create([
            'title_en' => 'About',
            'title_idn' => 'Tentang',
            'link' => 'about',
            'sort' => 2,
        ]);
        \App\Footer_menu::create([
            'title_en' => 'Article',
            'title_idn' => 'Artikel',
            'link' => 'article',
            'sort' => 3,
        ]);
        \App\Footer_menu::create([
            'title_en' => 'Contact',
            'title_idn' => 'Kontak',
            'link' => 'contact',
            'sort' => 4,
        ]);
        \App\Footer_menu::create([
            'title_en' => 'Privacy Policy',
            'title_idn' => 'Kebijakan',
            'link' => 'privacy-policy',
            'sort' => 5,
        ]);
    }
}
