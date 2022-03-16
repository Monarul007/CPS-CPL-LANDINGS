<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'client' => env('CLIENT_ID'),
            'admin' => 1,
            'name' => 'Admin',
            'email' => 'hello.shamimit@gmail.com',
            'password' => Hash::make('admin123'),
        ]);

        DB::table('designs')->insert([
            'client' => env('CLIENT_ID'),
            'form' => 'form-1',
            'body_bg' => '',
            'form_bg' => '',
            'form_text1' => 'You are on the best place for meeting new people nearby! Chat, Flirt, Socialize and have Fun!',
            'form_text2' => 'Meet amazing people nearby Waiting for you...!'
        ]);

        DB::table('meta_settings')->insert([
            'client' => env('CLIENT_ID'),
            'form' => 'form-1',
            'logo' => '',
            'title' => env('APP_NAME'),
            'favicon' => '',
            'sub_title' => 'Meet amazing people nearby Waiting for you...!',
            'website_name' => env('APP_NAME')
        ]);
    }
}
