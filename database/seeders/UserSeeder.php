<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


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
        DB::table('users')->insert([
        'name'=>'anil sidhy',
        'email'=>'anil@sidhu.com',
        'password'=>Hash::make('12345')
    ]);
  }
}

// afifa