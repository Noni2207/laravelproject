<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('food_categories')->insert([
            'title' => 'starters',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate architecto officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas repellendus natus nihil? ',
            'image_url' => '/img/CHIPS.png',
            'update_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    
        \DB::table('food_categories')->insert([
            'title' => 'burgers',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate architecto officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas repellendus natus nihil? ',
            'image_url' => '/images/hamburger-and-fries-png-4.png',
            'update_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        \DB::table('food_categories')->insert([
            'title' => 'entrees',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate architecto officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas repellendus natus nihil? ',
            'image_url' => '/png/full/342-3422633_pork-entrees-steak-pork-png.png',
            'update_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        \DB::table('food_categories')->insert([
            'title' => 'sides',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate architecto officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas repellendus natus nihil? ',
            'image_url' => 'https://pngriver.com/wp-content/uploads/2018/04/Download-Salad-Transparent-PNG.png',
            'update_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        \DB::table('food_categories')->insert([
            'title' => 'desert',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate architecto officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas repellendus natus nihil? ',
            'image_url' => '/wp-content/uploads/2018/04/Download-Cupcake-PNG-Transparent-Image-420x190.png',
            'update_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
