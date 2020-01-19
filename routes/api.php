<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//equipos
Route::resource('/categories','CategoryController');
Route::resource('/items','ItemController');
Route::resource('/serials','SerialController');

//stados
Route::resource('/states','StateController');//estado de equipos
Route::resource('/dstates','DstateController');//estado entrega de quipos
Route::resource('/rstates','RstateController');//estado de la reserva

//relacionales
Route::resource('/category_item','CategoryItemController');

//reservas
Route::resource('/tags','TagController');
Route::resource('/hours','HourController');


