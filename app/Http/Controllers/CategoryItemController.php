<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Item;
use App\Category;
use Carbon\Carbon;

class CategoryItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Item::find($id)->categories;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

/*    //Delete relations
    public function deleteCategory($id,$category)
    {
        Item::find($id)->categories()->detach($category);
        return redirect('/items/'.$id.'/edit');
    }
    //add categories
    public function addCategory($id)
    {
        $item=Item::findOrFail($id);
        return view('item.addCategories',[
            'item'=>$item,
            'categories'=>Category::all()
            ]);
    }
    //confirmacion de actualizacion de categorias
    public function addCategoryConfirm(Request $request){
        
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
        return redirect('/items/'.$request->id.'/edit');
    }*/