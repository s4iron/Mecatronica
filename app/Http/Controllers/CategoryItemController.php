<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Item;
use App\Category;
use Carbon\Carbon;

class CategoryItemController extends Controller
{
    //retorna todos los items de una categoria
    public function index(Request $request)
    {
        $items = Category::find($request->id)->items;
        return $items;
    }

    //relaciona los items con distintas categorias, funciona como update
    public function store(Request $request)
    {

        if(Item::find($request->id)->categories == '[]')
        {
            $parents = Category::find($request->categories);
            Item::find($request->id)->categories()->attach($parents);
        }
        else
        {
            $categories=Item::find($request->id)->categories;
            foreach($request->categories as $request->category){
                $flag=1;
                foreach($categories as $category){
                    if($category->id == $request->category){
                        $flag=0;
                    }
                }
                if($flag==1)
                {
                    Item::find($request->id)->categories()->attach($request->category);
                }
            }
        }
        return Item::find($request->id)->categories;
    }

    //retorna todos los items de una categoria
    public function show($id)
    {
        $categories = Item::find($id)->categories;
        return $categories;
    }

    //elimina relaciones entre items y categorias
    public function destroy($id,Request $request)
    {
        $categories=Category::find(collect($request->categories));
        $string ='';
        foreach($categories as $category){
            $string = $string.$category->category.', ';
        }
        Item::find($id)->categories()->detach($request->categories);
        return 'Se eliminaron las categorias: '.substr($string,0,-2).'.';//el substr elimina el ultimo espacio y la ultima coma del arreglo
    }
}
