<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\State;

class StateController extends Controller
{
    //retorna listado de estados
    public function index()
    {
        return State::all();
    }

    //crea un nuevo estado
    public function store(Request $request)
    {
        $validData = $request->validate([
            'state'=>'required|min:1',
            'color'=>'required|min:1'
        ]);   

        $state = new State();
        $state->state = $validData['state'];
        $state->color = $validData['color'];
        $state->save();

        return $state;
    }

    //actualiza el estado
    public function update($id,Request $request)
    {
        $state = State::findOrFail($id);

        $validData = $request->validate([
            'state'=>'required|min:1',
            'color'=>'required|min:1'
        ]);   
        
        $state->state = $validData['state'];
        $state->color = $validData['color'];
        $state->save();

        return $state;
    }

    //destruye un estado
    public function destroy($id)
    {
        $state = State::findOrFail($id);
        $cache = $state;
        $state->delete();
        return ([$cache,"eliminada"]);
    }
}
