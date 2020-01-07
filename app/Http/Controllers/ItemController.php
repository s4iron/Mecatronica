<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;

class ItemController extends Controller
{
    //retorna todos los items
    public function index()
    {
        return Item::all();
    }

    //creacion de items
    public function store(Request $request)
    {
        $validData = $request->validate([
            'item'=>'required',
            'description'=>'required|min:3'
        ]);   

        $item = new Item();
        $item->item = $validData['item'];
        $item->description = $validData['description'];
        $item->save();

        return $item;

    }

    //show de un item
    public function show($id)
    {
        return Item::findOrFail($id);
    }

    //actualizacion de un item
    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);

        $validData = $request->validate([
            'item'=>'required|min:3',
            'description'=>'required|min:3'
        ]);   

        $item->item = $validData['item'];
        $item->description = $validData['description'];
        $item->save();

        return $item;
    }

    //elimina un item y con el las relaciones existentes a categorias, requisito no puede tener seriales asociados
    public function destroy($id)
    {
        $item=Item::findOrFail($id);
        $cache = $item;
        Item::find($id)->categories()->detach();
        $item->delete();
        return ([$cache,"eliminada"]);
    }
}
