<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rstate;

class RstateController extends Controller
{

    public function index()
    {
        return Rstate::all();
    }

    public function store(Request $request)
    {
        $validData = $request->validate([
            'reserve_state'=>'required|min:3'
        ]);
        $rstate = new Rstate();
        $rstate->reserve_state = $validData['reserve_state'];
        $rstate->save();

        return $rstate;
    }


    public function show($id)
    {
        $rstate = Rstate::findOrFail($id);
        return $rstate;
    }

    public function update(Request $request, $id)
    {;
        $rstate = Rstate::findOrFail($id);
        $validData = $request->validate([
            'reserve_state'=>'required|min:3'
        ]);
        $rstate->reserve_state = $validData['reserve_state'];
        $rstate->save();

        return $rstate;
    }


    public function destroy($id)
    {
        $rstate = Rstate::findOrFail($id);
        $cache = $rstate;
        $rstate->delete();
        return $cache;
    }
}
