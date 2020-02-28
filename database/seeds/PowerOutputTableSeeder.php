<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PowerOutputTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('power_outputs')->insert([
            [
                'name' => '800',
            ],
            [
                'name' => '374',
            ],
            [
                'name' => '230',
            ],
            [
                'name' => '226',
            ],
            [
                'name' => '900',
            ],
            [
                'name' => '700',
            ],
            [
                'name' => '240',
            ],
            [
                'name' => '372',
            ],
            [
                'name' => '224',
            ],
            [
                'name' => '234',
            ],
        ]);
    }
}

