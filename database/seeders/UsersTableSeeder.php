<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'fname' => 'Ninoslav',
            'lname' => 'Stanojevic',
            'email' => 'stanojevic.ninoslav@yahoo.com',
            'password' => Hash::make('Mojfilip2302'),
            'update_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        \DB::table('users')->insert([
            'fname' => 'Filip',
            'lname' => 'Stanojevic',
            'email' => 'filip@gmail.com',
            'password' => Hash::make('123456789'),
            'update_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
