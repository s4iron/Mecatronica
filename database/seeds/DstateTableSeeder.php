<?php

use Illuminate\Database\Seeder;

class DstateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dstates')->insert([
            [
                'id' => 1,
                'delibery_state' => 'deliberyState1'
            ],
            [
                'id' => 2,
                'delibery_state' => 'deliberyState2'
            ],
            [
                'id' => 3,
                'delibery_state' => 'deliberyState3'
            ]
        ]);
    }
}
