<?php

use Illuminate\Database\Seeder;

class RstateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rstates')->insert([
            [
                'id' => 1,
                'reserve_state' => 'ReserveState1'
            ],
            [
                'id' => 2,
                'reserve_state' => 'ReserveState2'
            ],
            [
                'id' => 3,
                'reserve_state' => 'ReserveState3'
            ]
        ]);
    }
}
