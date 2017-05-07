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


//user routes
Route::get('/user' ,'UserController@index', function (Request $request) {
    return $request->index();
})->middleware('auth:api');

Route::get('user/{id}','UserController@show', function (Request $request) {
    return $request->show();
});


Route::resource('user','UserController',['except' => ['create','edit']]);
Route::resource('book','BookController',['except' => ['create','edit']]);
Route::resource('golongan','GolonganController');
