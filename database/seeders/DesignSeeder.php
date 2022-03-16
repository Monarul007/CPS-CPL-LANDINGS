<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designs')->insert([
            'client' => env('CLIENT_ID'),
            'form' => 'form-1',
            'body_bg' => '',
            'form_bg' => '',
            'form_text1' => 'You are on the best place for meeting new people nearby! Chat, Flirt, Socialize and have Fun!',
            'form_text2' => 'Meet amazing people nearby Waiting for you...!'
        ]);
    }
}
