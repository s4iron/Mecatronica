<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
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
                'id' => 1,
                'category' => 'Neumatica',
                'description' => 'seed1'
            ],
            [
                'id' => 2,
                'category' => 'Electronica',
                'description' => 'seed2'
            ],
            [
                'id' => 3,
                'category' => 'hidraulica',
                'description' => 'seed3'
            ]
        ]);
    }
}
