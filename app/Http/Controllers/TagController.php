<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
class TagController extends Controller
{

    public function index()
    {
        return Tag::all();
    }


    public function store(Request $request)
    {   
        $validData = $request->validate([
            'hour'=>'required',
        ]);
        $tag = new Tag();
        $tag->hour=$validData['hour'];
        $tag->save();
        return $tag;
    }

    public function show($id)
    {
        $tag = Tag::findOrFail($id);
        return $tag;
    }

    public function update(Request $request, $id)
    {
        $tag = Tag::findOrFail($id);
        $validData = $request->validate([
            'hour'=>'required',
        ]);
        $tag->hour=$validData['hour'];
        $tag->save();
        return $tag;
    }

    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $cache=$tag;
        $tag->delete();
        return ([$cache,"eliminada"]);
    }
}
