<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CapacityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('capacities')->insert([
            [
                'name' => '0.6',
            ],
            [
                'name' => '0.8',
            ],
            [
                'name' => '1',
            ],
            [
                'name' => '1.5',
            ],
            [
                'name' => '1.6',
            ],
            [
                'name' => '1.7',
            ],
            [
                'name' => '1.8',
            ],
            [
                'name' => '1.75',
            ],
            [
                'name' => '2',
            ],
            [
                'name' => '2.2',
            ],
        ]);
    }
}


