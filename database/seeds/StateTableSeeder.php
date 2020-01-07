<?php

use Illuminate\Database\Seeder;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            [
                'id' => 1,
                'state' => 'Bueno',
                'color' => 'verde'
            ],
            [
                'id' => 2,
                'state' => 'regular',
                'color' => 'amarillo'
            ],
            [
                'id' => 3,
                'state' => 'malo',
                'color' => 'rojo'
            ]
        ]);
    }
}
