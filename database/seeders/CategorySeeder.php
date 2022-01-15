<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category_name' => 'Mechanical Keyboard',
            'category_image' => 'https://www.ubuy.co.id/productimg/?image=aHR0cHM6Ly9tLm1lZGlhLWFtYXpvbi5jb20vaW1hZ2VzL0kvNjFjdDJTTFdoSlMuX0FDX1NMMTUwMF8uanBn.jpg'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Membrane Keyboard',
            'category_image' => 'https://m.media-amazon.com/images/I/71z6gsI87bL._AC_SL1500_.jpg'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'TKL Keyboard',
            'category_image' => 'https://www.ubuy.co.id/productimg/?image=aHR0cHM6Ly9tLm1lZGlhLWFtYXpvbi5jb20vaW1hZ2VzL0kvNzFQUW9UcW9lbEwuX0FDX1NMMTUwMF8uanBn.jpg'
        ]);
    }
}
