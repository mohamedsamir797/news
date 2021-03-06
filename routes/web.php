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




Route::middleware('auth')->group(function(){

    Route::resource('news','NewsController');

    Route::delete('del/news/{id?}','NewsController@delete');


});

Route::get('excel','test\testController@excele');
Route::post('excel','test\testController@importexcele');

Route::get('export','test\testController@export');



