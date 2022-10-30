<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('food_items')->insert([
            'title' => 'Texas Burger',
            'decsription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit, reiciendis aliquam vel voluptas repellendus natus nihil? ',
            'image_url' => '/img/CHIPS.png',
            'price' => 9.99,
            'category_id' => 2,
            'update_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        \DB::table('food_items')->insert([
            'title' => 'BBQ Burger',
            'decsription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit, reiciendis aliquam vel voluptas repellendus natus nihil? ',
            'image_url' => '/img/CHIPS.png',
            'price' => 9.99,
            'category_id' => 2,
            'update_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        \DB::table('food_items')->insert([
            'title' => 'Big Burger',
            'decsription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit, reiciendis aliquam vel voluptas repellendus natus nihil? ',
            'image_url' => '/img/CHIPS.png',
            'price' => 9.99,
            'category_id' => 2,
            'update_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        \DB::table('food_items')->insert([
            'title' => 'Billvs Burger',
            'decsription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit, reiciendis aliquam vel voluptas repellendus natus nihil? ',
            'image_url' => '/img/CHIPS.png',
            'price' => 9.99,
            'category_id' => 2,
            'update_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
