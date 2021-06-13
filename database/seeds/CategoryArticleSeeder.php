<?php

use Illuminate\Database\Seeder;

class CategoryArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category_article::create([
            'title_en' => 'Cooking Oil',
            'title_idn' => 'Minyak Goreng',
            'slug' => 'cooking-oil',
            'sort' => 1,
        ]);

        \App\Category_article::create([
            'title_en' => 'Coffee',
            'title_idn' => 'Kopi',
            'slug' => 'coffee',
            'sort' => 2,
        ]);

        \App\Category_article::create([
            'title_en' => 'Sugar',
            'title_idn' => 'Gula',
            'slug' => 'sugar',
            'sort' => 3,
        ]);

        \App\Category_article::create([
            'title_en' => 'Tea',
            'title_idn' => 'Teh',
            'slug' => 'tea',
            'sort' => 4,
        ]);
    }
}
