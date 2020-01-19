<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dstate;

class DstateController extends Controller
{
    public function index()
    {
        return Dstate::all();
    }

    //creacion de diferentes tipos de estado en entrega
    public function store(Request $request)
    {
        $validData = $request->validate([
            'delibery_state'=>'required|min:3'
        ]);
        $dstate = new Dstate();
        $dstate->delibery_state = $validData['delibery_state'];
        $dstate->save();

        return $dstate;
    }

    public function show($id)
    {
        $dstate=Dstate::findOrFail($id);
        return ($dstate);
    }

    public function update(Request $request, $id)
    {
        $dstate = Dstate::findOrFail($id);
        $validData = $request->validate([
            'delibery_state'=>'required|min:3'
        ]);
        $dstate->delibery_state = $validData['delibery_state'];
        $dstate->save();

        return $dstate;
    }

    public function destroy($id)
    {
        $dstate=Dstate::findOrFail($id);
        $cache = $dstate;
        $dstate->delete();
        return ([$cache,"eliminada"]);
    }
}
