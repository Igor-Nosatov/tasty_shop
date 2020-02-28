<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            [
                'name' => 'Black',
            ],
            [
                'name' => 'White',
            ],
            [
                'name' => 'Silver',
            ],
            [
                'name' => 'Cream',
            ],
            [
                'name' => 'Grey',
            ],
            [
                'name' => 'Green',
            ],
            [
                'name' => 'Red',
            ],
            [
                'name' => 'Blue',
            ],
            [
                'name' => 'Orange',
            ],
            [
                'name' => 'Pink',
            ],
        ]);
    }
}

