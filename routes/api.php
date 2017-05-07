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

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:api');
// Route::resource('user','UserController',['except' => ['create','edit']]);

//user routes
// Route::get('user','UserController@index');
Route::get('user/{id}','UserController@show', function (Request $request) {
    return $request->show();
});

Route::get('/user' ,'UserController@index', function (Request $request) {
    return $request->index();
});

Route::resource('user','UserController',['except' => ['create','edit']]);
Route::resource('book','BookController',['except' => ['create','edit']]);
Route::resource('golongan','GolonganController');
