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

Route::resource('/home/homes','Home\IndexController')->names('home/homes');
Route::resource('/','Home\IndexController');
Route::resource('/homes/homes','Admin\Index');
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/homes', 'Home\IndexController@home')->name('homes');
