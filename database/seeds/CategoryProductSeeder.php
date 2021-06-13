<?php

use Illuminate\Database\Seeder;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category_product::create([
            'title_en' => 'Oil',
            'title_idn' => 'Minyak',
            'sort' => 1,
        ]);

        \App\Category_product::create([
            'title_en' => 'Coffee',
            'title_idn' => 'Kopi',
            'sort' => 2,
        ]);

        \App\Category_product::create([
            'title_en' => 'Sugar',
            'title_idn' => 'Gula',
            'sort' => 3,
        ]);

        \App\Category_product::create([
            'title_en' => 'Tea',
            'title_idn' => 'Teh',
            'sort' => 4,
        ]);
    }
}
