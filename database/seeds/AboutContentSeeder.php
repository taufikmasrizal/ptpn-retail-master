<?php

use Illuminate\Database\Seeder;

class AboutContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

        \App\About_content::create([
            'image_background' => 'content-1.png',
            'title_en' => 'As a Company',
            'title_idn' => 'As a Company ID',
            'content_en' => $content,
            'content_idn' => $content . ' ID',
            'sort' => 1,
        ]);

        \App\About_content::create([
            'image_background' => 'content-2.png',
            'title_en' => 'As a Friend of The Environment',
            'title_idn' => 'As a Friend of The Environment ID',
            'content_en' => $content,
            'content_idn' => $content . ' ID',
            'sort' => 2,
        ]);
    }
}
