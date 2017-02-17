<?php

/*
|--------------------------------------------------------------------------
| Public Routes
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

Route::get('/home', 'HomeController@index');

Route::get('{commerce}/{slug}/editar', [
	'uses' => 'EditCommerceController@edit',
	'as'	=> 'commerces.edit'
]);

Route::put('{commerce}/editar', [
	'uses' => 'EditCommerceController@update',
	'as'	=> 'commerces.update'
]);

Route::get('{commerce}/logo', [
	'uses' 	=> 'CommerceController@logo',
	'as'	=> 'commerces.logo'
]);
