<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::resource('/categories','categoryController')->middleware('auth');

// Route::resource('/categories','categoryController');
// Route::get('/categories/{id}/confirmDelete','categoryController@confirmDelete');

// Route::resource('/items','itemController');
// Route::get('/items/{id}/confirmDelete','itemController@confirmDelete');
// Route::delete('/items/{id}/deleteCategory/{category}','itemController@deleteCategory');
// Route::get('/items/{id}/edit/categories','itemController@addCategory');
// Route::post('/items/{id}/edit/addCategories','itemController@addCategoryConfirm');
// Route::get('/items/{id}/confirmDelete','itemController@confirmDelete');

// Route::resource('/serials','serialController');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
