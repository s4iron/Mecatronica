<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hour;
class HourController extends Controller
{

    public function index()
    {
        return Hour::all();
    }

    public function store(Request $request)
    {
        $validData=$request->validate([
            'hour_start'=>'required|min:3',
            'duration'=>'required|min:1'
        ]);
        $hour = new Hour();

        $hour->hour_start=$validData['hour_start'];
        $hour->duration=$validData['duration'];
        $hour->save();
        return $hour;
    }

    public function show($id)
    {
        return Hour::findOrFail($id);
  
    }

    public function update(Request $request, $id)
    {
        $hour = Hour::find($id);
        $validData=$request->validate([
            'hour_start'=>'required|min:3',
            'duration'=>'required|min:1'
        ]);

        $hour->hour_start=$validData['hour_start'];
        $hour->duration=$validData['duration'];
        $hour->save();
        return $hour;
    }

    public function destroy($id)
    {
        $hour=Hour::findOrFail($id);
        $cache=$hour;
        $hour->delete();
        return ['Eliminado',$cache];
    }
}
