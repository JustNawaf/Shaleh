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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/shalehat','ShalehController@index')->name('index.shalehat');
Route::get('/shaleh/{id}','ShalehController@show_shaleh')->name('show.shaleh');
Route::prefix('admin')->group(function(){
Route::get('/add-shaleh','ShalehController@add_shaleh')->middleware('buss')->name('admin.add.shaleh');
Route::post('/store-shaleh','ShalehController@store_shaleh')->middleware('buss')->name('admin.store.shaleh');
});
