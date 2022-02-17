<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/hakkimizda' , 'App\Http\Controllers\ProjeController@hakkimizda')->name('hakkımızda');
Route::get('/iletisim' , 'App\Http\Controllers\ProjeController@iletisim')->name('iletisim');
Route::get('/projenin-amaci' , 'App\Http\Controllers\ProjeController@projeninamaci')->name('projeninamaci');
Route::get('/galeri' , 'App\Http\Controllers\ProjeController@galeri')->name('galeri');



