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
                'description' => 'probando'
            ],
            [
                'id' => 2,
                'category' => 'Electronica',
                'description' => 'probando'
            ]
        ]);
    }
}
