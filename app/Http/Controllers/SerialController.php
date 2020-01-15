<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serial;
use App\State;
use App\Item;

class SerialController extends Controller
{
    //retorna todos los seriales correspondientes aun item_id
    public function index()
    {
        return Serial::all();
    }

    //crea un serial y actualiza la cantidad de seriales que se relacionan al item indicado, esto se hace en la tabla items
    public function store(Request $request)
    {
        $validData = $request->validate([
            'model'=>'required|min:3',
            'serial'=>'required|min:3',
            'observations'=>'nullable',
            'item_id'=>'required|numeric',
            'state_id'=>'required|numeric'
        ]);   

        $serial = new Serial();
        $serial->model = $validData['model'];
        $serial->serial = $validData['serial'];
        $serial->observations = $validData['observations'];
        $serial->item_id = $validData['item_id'];
        $serial->state_id = $validData['state_id'];
        $serial->save();

        //actualizacion de quantity en item
        $item = Item::find($request->item_id); 
        $item->quantity = count(Item::find($request->item_id)->serials);
        $item->save();
        
        return $serial;;
    }

    //despliega las carracteristicas de un serial en especifico
    public function show($id)
    {
        $serial = Serial::find($id);
        return $serial;
    }

    //actualizacion de serial 
    public function update(Request $request, $id)
    {
        $serial = Serial::findOrFail($id);
        $oldItemId = $serial->item_id;
        $validData = $request->validate([
            'model'=>'required|min:3',
            'serial'=>'required|min:3',
            'observations'=>'nullable',
            'item_id'=>'required|numeric',
            'state_id'=>'required|numeric'
        ]);   

        $serial->model = $validData['model'];
        $serial->serial = $validData['serial'];
        $serial->observations = $validData['observations'];
        $serial->item_id = $validData['item_id'];
        $serial->state_id = $validData['state_id'];
        $serial->save();

        //actualizacion de quantity en item
        $item = Item::find($request->item_id); 
        $item->quantity = count(Item::find($request->item_id)->serials);
        $item->save();

        //se reduce la cantidad de los items 
        if($oldItemId != $serial->item_id){
            $item = Item::find($oldItemId); 
            $item->quantity = count(Item::find($oldItemId)->serials);
            $item->save();
        }

        return $serial;
    }

    public function destroy($id)
    {
        $serial = Serial::findOrFail($id);
        $cache = $serial;
        $serial->delete();

        //se actualiza cantidad en items
        $item = Item::find($cache->item_id); 
        $item->quantity = count(Item::find($cache->item_id)->serials);
        $item->save();
        
        return ([$cache,"eliminada"]);
        
    }
}
