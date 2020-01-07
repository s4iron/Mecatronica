<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'id' => 1,
                'item' => 'Seed1',
                'description' => 'seed1'
            ],
            [
                'id' => 2,
                'item' => 'seed2',
                'description' => 'seed2'
            ],
            [
                'id' => 3,
                'item' => 'seed3',
                'description' => 'seed3'
            ],
            [
                'id' => 4,
                'item' => 'seed4',
                'description' => 'seed4'
            ],
            [
                'id' => 5,
                'item' => 'seed5',
                'description' => 'seed5'
            ]
        ]);
    }
}
