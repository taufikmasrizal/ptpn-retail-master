<?php

use Illuminate\Database\Seeder;

class HistoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $content = 'Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.';

        \App\History_product::create([
            'product_id' => 1,
            'year' => '1965',
            'title_en' => 'Plantation Started',
            'title_idn' => 'Awal mula berkebun',
            'content_en' => $content,
            'content_idn' => $content. 'ID',
        ]);
        \App\History_product::create([
            'product_id' => 1,
            'year' => '1985',
            'title_en' => 'Plantation Started',
            'title_idn' => 'Awal mula berkebun',
            'content_en' => $content,
            'content_idn' => $content. 'ID',
        ]);
        \App\History_product::create([
            'product_id' => 1,
            'year' => '2021',
            'title_en' => 'Plantation Started',
            'title_idn' => 'Awal mula berkebun',
            'content_en' => $content,
            'content_idn' => $content. 'ID',
        ]);
        
        
        
        \App\History_product::create([
            'product_id' => 2,
            'year' => '1965',
            'title_en' => 'Plantation Started',
            'title_idn' => 'Awal mula berkebun',
            'content_en' => $content,
            'content_idn' => $content. 'ID',
        ]);
        \App\History_product::create([
            'product_id' => 2,
            'year' => '1985',
            'title_en' => 'Plantation Started',
            'title_idn' => 'Awal mula berkebun',
            'content_en' => $content,
            'content_idn' => $content. 'ID',
        ]);
        \App\History_product::create([
            'product_id' => 2,
            'year' => '2021',
            'title_en' => 'Plantation Started',
            'title_idn' => 'Awal mula berkebun',
            'content_en' => $content,
            'content_idn' => $content. 'ID',
        ]);
        
        
        
        \App\History_product::create([
            'product_id' => 3,
            'year' => '1965',
            'title_en' => 'Plantation Started',
            'title_idn' => 'Awal mula berkebun',
            'content_en' => $content,
            'content_idn' => $content. 'ID',
        ]);
        \App\History_product::create([
            'product_id' => 3,
            'year' => '1985',
            'title_en' => 'Plantation Started',
            'title_idn' => 'Awal mula berkebun',
            'content_en' => $content,
            'content_idn' => $content. 'ID',
        ]);
        \App\History_product::create([
            'product_id' => 3,
            'year' => '2021',
            'title_en' => 'Plantation Started',
            'title_idn' => 'Awal mula berkebun',
            'content_en' => $content,
            'content_idn' => $content. 'ID',
        ]);
        
        
        
        \App\History_product::create([
            'product_id' => 4,
            'year' => '1965',
            'title_en' => 'Plantation Started',
            'title_idn' => 'Awal mula berkebun',
            'content_en' => $content,
            'content_idn' => $content. 'ID',
        ]);
        \App\History_product::create([
            'product_id' => 4,
            'year' => '1985',
            'title_en' => 'Plantation Started',
            'title_idn' => 'Awal mula berkebun',
            'content_en' => $content,
            'content_idn' => $content. 'ID',
        ]);
        \App\History_product::create([
            'product_id' => 4,
            'year' => '2021',
            'title_en' => 'Plantation Started',
            'title_idn' => 'Awal mula berkebun',
            'content_en' => $content,
            'content_idn' => $content. 'ID',
        ]);
    }
}
