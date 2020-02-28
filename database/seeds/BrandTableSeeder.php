<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            [
                'name' => 'Salter',
            ],
            [
                'name' => 'Russell Hobbs',
            ],
            [
                'name' => 'Swan',
            ],
            [
                'name' => 'Tower',
            ],
            [
                'name' => 'Daewoo',
            ],
            [
                'name' => 'George Foreman',
            ],
            [
                'name' => 'Geepas',
            ],
            [
                'name' => 'Sharp',
            ],
            [
                'name' => 'Tefal',
            ],
            [
                'name' => 'Breville',
            ],
        ]);
    }
}

