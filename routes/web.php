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


Auth::routes(); 

Route::get('/en', 'EnglishPageController@home')->name('home');

// AUSTRIA
Route::get('/', 'AustriaPageController@home')->name('home');
Route::get('/au', 'AustriaPageController@home')->name('home');
Route::get('/controle/au', 'AustriaController@home')->name('controle');
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
Route::get('/controle/au', 'EnglishController@home')->name('controle');
Route::get('/es', 'EnglishController@home')->name('home');

Route::post('/englishbanner', 'EnglishController@englishbanner')->name('englishbanner');
Route::post('/englishmenu', 'EnglishController@englishmenu')->name('englishmenu');
Route::post('/englishsobre', 'EnglishController@englishsobre')->name('englishsobre');
Route::post('/englishservico', 'EnglishController@englishservico')->name('englishservico');
Route::post('/englishestrutura', 'EnglishController@englishestrutura')->name('englishestrutura');
Route::post('/englishcontato', 'EnglishController@englishcontato')->name('englishcontato');
Route::post('/englishdepoimentos', 'EnglishController@englishdepoimentos')->name('englishdepoimentos');
Route::post('/englishagendamento', 'EnglishController@englishagendamento')->name('englishagendamento');
Route::post('/englishmodal', 'EnglishController@englishmodal')->name('englishmodal');


// ESPANHOL
Route::get('/es', 'EnglishController@home')->name('home');
Route::get('/controle/au', 'EnglishController@home')->name('controle');

Route::post('/englishbanner', 'EnglishController@englishbanner')->name('englishbanner');
Route::post('/englishmenu', 'EnglishController@englishmenu')->name('englishmenu');
Route::post('/englishsobre', 'EnglishController@englishsobre')->name('englishsobre');
Route::post('/englishservico', 'EnglishController@englishservico')->name('englishservico');
Route::post('/englishestrutura', 'EnglishController@englishestrutura')->name('englishestrutura');
Route::post('/englishcontato', 'EnglishController@englishcontato')->name('englishcontato');
Route::post('/englishdepoimentos', 'EnglishController@englishdepoimentos')->name('englishdepoimentos');
Route::post('/englishagendamento', 'EnglishController@englishagendamento')->name('englishagendamento');
Route::post('/englishmodal', 'EnglishController@englishmodal')->name('englishmodal');

// PORTUGUÊS
Route::get('/pt', 'PortuguesPageController@home')->name('home');
Route::get('/controle/pt', 'PortuguesController@home')->name('controle');

Route::post('/portuguesbanner', 'PortuguesController@portuguesbanner')->name('portuguesbanner');
Route::post('/portuguesmenu', 'PortuguesController@portuguesmenu')->name('portuguesmenu');
Route::post('/portuguessobre', 'PortuguesController@portuguessobre')->name('portuguessobre');
Route::post('/portuguesservico', 'PortuguesController@portuguesservico')->name('portuguesservico');
Route::post('/portuguesestrutura', 'PortuguesController@portuguesestrutura')->name('portuguesestrutura');
Route::post('/portuguescontato', 'PortuguesController@portuguescontato')->name('portuguescontato');
Route::post('/portuguesdepoimentos', 'PortuguesController@portuguesdepoimentos')->name('portuguesdepoimentos');
Route::post('/portuguesagendamento', 'PortuguesController@portuguesagendamento')->name('portuguesagendamento');
Route::post('/portuguesmodal', 'PortuguesController@portuguesmodal')->name('portuguesmodal');

