<?php

use Illuminate\Database\Seeder;
use App\Item;

class SerialTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('serials')->insert([
            [
                'id' => 1,
                'model' => 'samsung',
                'serial' => 'serial1',
                'observations'=>'',
                'item_id'=>1,
                'state_id'=>1
            ],
            [
                'id' => 2,
                'model' => 'lg',
                'serial' => 'serial2',
                'observations'=>'',
                'item_id'=>2,
                'state_id'=>2
            ],
            [
                'id' => 3,
                'model' => 'lenovo',
                'serial' => 'serial3',
                'observations'=>'',
                'item_id'=>3,
                'state_id'=>3
            ],
            [
                'id' => 4,
                'model' => 'huawei',
                'serial' => 'serial4',
                'observations'=>'',
                'item_id'=>1,
                'state_id'=>1
            ]
        ]);

        $item = Item::find(1); 
        $item->quantity = count(Item::find(1)->serials);
        $item->save();
        $item = Item::find(2); 
        $item->quantity = count(Item::find(2)->serials);
        $item->save();
        $item = Item::find(3); 
        $item->quantity = count(Item::find(3)->serials);
        $item->save();
    }
}
