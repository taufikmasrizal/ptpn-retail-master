<?php

use Illuminate\Database\Seeder;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Promotion::create([
            'image_background' => 'promosi-1.png',
            'sort' => '1',
            'link' => '#'
        ]);
        \App\Promotion::create([
            'image_background' => 'promosi-2.png',
            'sort' => '2',
            'link' => '#'
        ]);
        \App\Promotion::create([
            'image_background' => 'promosi-3.png',
            'sort' => '3',
            'link' => '#'
        ]);
    }
}
