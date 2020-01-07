<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    //retorna todas las categorias
    public function index()
    {
        return Category::all();
    }

    //creacion de categorias
    public function store(Request $request)
    {
        
        $validData = $request->validate([
            'category'=>'required|min:3',
            'description'=>'required|min:3'
        ]);   

        $category = new Category();
        $category->category = $validData['category'];
        $category->description = $validData['description'];
        $category->save();

        return $category;
    }

    //retorna el contenido de una categoria en especifico
    public function show($id)
    {
        return Category::findOrFail($id);
    }

    //actualizacion de categorias
    public function update(Request $request, $id)
    {

        $category = Category::findOrFail($id);

        $validData = $request->validate([
            'category'=>'required|min:3',
            'description'=>'required|min:3'
        ]);   

        $category->category = $validData['category'];
        $category->description = $validData['description'];
        $category->save();

        return $category;
    }

    //elimina una categoria, requisito no tener items asociados
    public function destroy($id)
    {
        $category=Category::findOrFail($id);
        $cache = $category;
        $category->delete();
        return ([$cache,"eliminada"]);
    }

}
