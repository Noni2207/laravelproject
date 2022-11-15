<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('members')->insert([
            'fname' => 'Zoran',
            'lname' => 'Stanojevic',
            'email' => 'stanojevic.zoran@gmail.com',
            'phone_numer' => '2345675670',
            'password' => Hash::make('Mojfilip2302'),
            'update_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
