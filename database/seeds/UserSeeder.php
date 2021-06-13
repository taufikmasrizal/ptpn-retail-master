<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\User::create([
            'name' => 'dewanstudio',
            'role' => 1,
            'email' => 'admin@dewanstudio.com',
            'password' => Hash::make('admin12345678'),
        ]);
    }
}
