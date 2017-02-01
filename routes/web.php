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

Route::get('/', 'Web\AccesoController@index')->name('web.acceso');
Route::get('registro', 'Web\RegistroController@index')->name('web.registro');
Route::post('registro', 'Web\RegistroController@registro')->name('auth.registro');
Route::post('acceso', 'Web\AccesoController@acceso')->name('auth.acceso');

