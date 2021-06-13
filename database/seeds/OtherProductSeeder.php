<?php

use Illuminate\Database\Seeder;

class OtherProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Other_product::create([
            'category_id' => 1, //minyak
            'title_en' => 'Salvaco',
            'title_idn' => 'Salvaco',
            'link' => '#',
        ]);
        \App\Other_product::create([
            'category_id' => 1, //minyak
            'title_en' => 'Malicco',
            'title_idn' => 'Malicco',
            'link' => '#',
        ]);



        \App\Other_product::create([
            'category_id' => 3, //gula
            'title_en' => 'Walini',
            'title_idn' => 'Walini',
            'link' => '#',
        ]);
        \App\Other_product::create([
            'category_id' => 3, //gula
            'title_en' => 'Haluadeli',
            'title_idn' => 'Haluadeli',
            'link' => '#',
        ]);
        \App\Other_product::create([
            'category_id' => 3, //gula
            'title_en' => 'Dasamanis',
            'title_idn' => 'Dasamanis',
            'link' => '#',
        ]);
        \App\Other_product::create([
            'category_id' => 3, //gula
            'title_en' => 'Gulapas',
            'title_idn' => 'Gulapas',
            'link' => '#',
        ]);
        \App\Other_product::create([
            'category_id' => 3, //gula
            'title_en' => 'Gollata',
            'title_idn' => 'Gollata',
            'link' => '#',
        ]);




        \App\Other_product::create([
            'category_id' => 2, //kopi
            'title_en' => 'Banaran',
            'title_idn' => 'Banaran',
            'link' => '#',
        ]);
        \App\Other_product::create([
            'category_id' => 2, //kopi
            'title_en' => 'Rolaas',
            'title_idn' => 'Rolaas',
            'link' => '#',
        ]);
        \App\Other_product::create([
            'category_id' => 2, //kopi
            'title_en' => 'Gunung Ijen',
            'title_idn' => 'Gunung Ijen',
            'link' => '#',
        ]);
        \App\Other_product::create([
            'category_id' => 2, //kopi
            'title_en' => 'Kopi Lanang Malangsari',
            'title_idn' => 'Kopi Lanang Malangsari',
            'link' => '#',
        ]);




        \App\Other_product::create([
            'category_id' => 4, //teh
            'title_en' => 'Tobasari',
            'title_idn' => 'Tobasari',
            'link' => '#',
        ]);
        \App\Other_product::create([
            'category_id' => 4, //teh
            'title_en' => 'Babutong',
            'title_idn' => 'Babutong',
            'link' => '#',
        ]);
        \App\Other_product::create([
            'category_id' => 4, //teh
            'title_en' => 'Kayu Aro',
            'title_idn' => 'Kayu Aro',
            'link' => '#',
        ]);
        \App\Other_product::create([
            'category_id' => 4, //teh
            'title_en' => 'Walini',
            'title_idn' => 'Walini',
            'link' => '#',
        ]);
        \App\Other_product::create([
            'category_id' => 4, //teh
            'title_en' => 'Goalpara',
            'title_idn' => 'Goalpara',
            'link' => '#',
        ]);
        \App\Other_product::create([
            'category_id' => 4, //teh
            'title_en' => 'Gunungmas',
            'title_idn' => 'Gunungmas',
            'link' => '#',
        ]);
        \App\Other_product::create([
            'category_id' => 4, //teh
            'title_en' => 'Kaligua',
            'title_idn' => 'Kaligua',
            'link' => '#',
        ]);
        \App\Other_product::create([
            'category_id' => 4, //teh
            'title_en' => 'Gajah Kertowono',
            'title_idn' => 'Gajah Kertowono',
            'link' => '#',
        ]);
    }
}
