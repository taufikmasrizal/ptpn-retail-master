<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sosmed = array(
            array(
                'platform' => 'Facebook',
                'link' => '#',
            ),
            array(
                'platform' => 'Twitter',
                'link' => '#',
            ),
            array(
                'platform' => 'Youtube',
                'link' => '#',
            ),
            array(
                'platform' => 'LinkedIn',
                'link' => '#',
            ),
            array(
                'platform' => 'Instagram',
                'link' => '#',
            ),
        );
        \App\Contact::create([
            'image_background' => 'bg-contact.png',
            'image_thumbnail' => 'contact-image.svg',
            'title_en' => 'Contact Us',
            'title_idn' => 'Kontak Kami',
            'social_media' => json_encode($sosmed),
            'content_en' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'content_idn' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ID',
            'email' => 'admin@mail.com',
            'phone' => '0899 9999 9999',
        ]);
    }
}
