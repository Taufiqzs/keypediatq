<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class SeederUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     

        DB::table('user')->insert([
            'name'=>'Taufiq',
            'email'=>'Taufiq345@gmail.com',
            'password'=>Hash::make('Taufiq345'),
            'address'=>'Jalan.Swadharma',
            'gender'=>'Male',
            'dateofbirth' => Carbon::create('2000', '05', '03')
        ]);
        
    }
}
