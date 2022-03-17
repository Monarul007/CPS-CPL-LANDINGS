<?php

namespace Database\Seeders;

use App\Models\Design;
use App\Models\MetaSettings;
use App\Models\User;
use Illuminate\Database\Seeder;
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
        User::updateOrCreate(
            ['client' => env('CLIENT_ID')],
            [
                'admin' => 1,
                'name' => 'Admin',
                'email' => 'admin@'.strtolower(env('CLIENT_ID')).'.com',
                'password' => Hash::make('admin123')
            ]
        );

        Design::updateOrCreate(
            ['client' => env('CLIENT_ID')],
            ['form' => 'form-1',
            'body_bg' => '',
            'form_bg' => '',
            'form_text1' => 'You are on the best place for meeting new people nearby! Chat, Flirt, Socialize and have Fun!',
            'form_text2' => 'Meet amazing people nearby Waiting for you...!']
        );

        MetaSettings::updateOrCreate(
            ['client' => env('CLIENT_ID')],
            ['form' => 'form-1',
            'logo' => '',
            'title' => env('APP_NAME'),
            'favicon' => '',
            'sub_title' => 'Meet amazing people nearby Waiting for you...!',
            'website_name' => env('APP_NAME')]
        );
    }
}
