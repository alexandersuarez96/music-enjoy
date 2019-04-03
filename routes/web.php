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
    return view('principal');
});
Route::get('principal', function () {
    return view('principal');
});
Route::get('canciones', function(){
    return view('canciones');
});
Route::get('interpretes', function(){
    return view('interpretes');
});
Route::get('generos', function(){
    return view('generos');
});
Route::get('albumes', function(){
    return view('albumes');
});
Route::get('casamusical', function(){
    return view('casamusical');
});
Route::get('autores', function(){
    return view('autores');
});
Route::get('medios', function(){
    return view('medios');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
