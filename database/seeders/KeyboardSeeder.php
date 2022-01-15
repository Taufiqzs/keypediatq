<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeyboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keyboards')->insert([
            'name' => '1STPLAYER Membrane KB',
            'price' => '150000',
            'category_id' => 2,
            'description' => 'This is membrane keyboard from the newcomer 1STPLAYER',
            'gallery' => 'https://www.1stplayer.com/uploads/images/20200924/b0478b92ebf4b38b8c6f12f7ac42ec85.jpg'
        ]);
    }
}
