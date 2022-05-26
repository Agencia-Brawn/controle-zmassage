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

Route::get('/en', 'EnglishPageController@home')->name('home');
Route::get('/pt', 'PortuguesPageController@home')->name('home');
Route::get('/es', 'EspanholPageController@home')->name('home');

// AUSTRIA
Route::get('/', 'AustriaPageController@home')->name('home');
Route::get('/controle', 'AustriaController@home')->name('controle');

Route::post('/austriabanner', 'AustriaController@austriabanner')->name('austriabanner');
Route::post('/austriamenu', 'AustriaController@austriamenu')->name('austriamenu');
Route::post('/austriasobre', 'AustriaController@austriasobre')->name('austriasobre');
Route::post('/austriaservico', 'AustriaController@austriaservico')->name('austriaservico');
Route::post('/austriaestrutura', 'AustriaController@austriaestrutura')->name('austriaestrutura');
Route::post('/austriacontato', 'AustriaController@austriacontato')->name('austriacontato');
Route::post('/austriadepoimentos', 'AustriaController@austriadepoimentos')->name('austriadepoimentos');
Route::post('/austriaagendamento', 'AustriaController@austriaagendamento')->name('austriaagendamento');
Route::post('/austriamodal', 'AustriaController@austriamodal')->name('austriamodal');

// INGLÊS


