<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CookingTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cooking_types')->insert([
            [
                'name' => 'Solo',
            ],
            [
                'name' => 'Grill',
            ],
            [
                'name' => 'Combination',
            ],
            [
                'name' => 'Convection',
            ],
        ]);
    }
}
