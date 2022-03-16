<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetaSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
