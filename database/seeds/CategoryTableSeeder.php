<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Electric Steamers',
                'image' => 'images/categories/1.jpg',
            ],
            [
                'name' => 'Slow Cookers',
                'image' => 'images/categories/2.jpg',
            ],
            [
                'name' => 'Microwaves',
                'image' => 'images/categories/3.jpg',
            ],
            [
                'name' => 'Grills',
                'image' => 'images/categories/4.jpg',
            ],
            [
                'name' => 'Mini Ovens',
                'image' => 'images/categories/5.jpg',
            ],
            [
                'name' => 'Fryers',
                'image' => 'images/categories/6.jpg',
            ],
            
        ]);
    }
}
