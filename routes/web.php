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

Route::get('/products', function () {

    return view('products');
});

Route::get('/ajaxproduct', function(){
    $jsonString = json_decode(Storage::disk('local')->get('data.json'));
//    $data = json_decode($jsonString, true);
//        return $data;

    return $jsonString;
});

Auth::routes();


Route::post('/product/add', 'ProductController@store');


