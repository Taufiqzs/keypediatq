<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class SeederUsersManager extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manager')->insert([
            'name'=>'Reza',
            'email'=>'Reza@gmail.com',
            'password'=>Hash::make('Reza345'),
            'address'=>'Jalan.apagitu',
            'gender'=>'Male',
            'dateofbirth' => Carbon::create('2000', '11', '20')
        ]);
    }
}
