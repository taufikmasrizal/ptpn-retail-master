<?php

use Illuminate\Database\Seeder;

class AboutContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\About_contact::create([
            'content_en' => 'Get All Information With <br> Contact Us',
            'content_idn' => 'Get All Information With <br> Contact Us ID',
            'link' => 'contact',
        ]);
    }
}
