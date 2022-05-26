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

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes(); 

Route::get('/', 'IndexController@home')->name('home');

// AUSTRIA
Route::get('/controle', 'HomeController@home')->name('controle');

Route::post('/austriabanner', 'HomeController@austriabanner')->name('austriabanner');
Route::post('/austriamenu', 'HomeController@austriamenu')->name('austriamenu');
Route::post('/austriasobre', 'HomeController@austriasobre')->name('austriasobre');
Route::post('/austriaservico', 'HomeController@austriaservico')->name('austriaservico');
Route::post('/austriaestrutura', 'HomeController@austriaestrutura')->name('austriaestrutura');
Route::post('/austriacontato', 'HomeController@austriacontato')->name('austriacontato');
Route::post('/austriadepoimentos', 'HomeController@austriadepoimentos')->name('austriadepoimentos');
Route::post('/austriaagendamento', 'HomeController@austriaagendamento')->name('austriaagendamento');
Route::post('/austriamodal', 'HomeController@austriamodal')->name('austriamodal');

// INGLÊS


