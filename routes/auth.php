<?php

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|
| Here is where you can register auth routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "auth" middleware group. Now create something great!
|
*/


Route::get('/home', 'HomeController@index');

//commerces
Route::get('agregar-comercio', [
	'uses'	=> 'CreateCommerceController@create',
	'as'	=> 'commerces.create'
]);
Route::post('agregar-comercio', [
	'uses'	=> 'CreateCommerceController@store',
	'as'	=> 'commerces.store'
]);
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

//makes

Route::get('agregar-marcas', [
	'uses'	=> 'CreateMakeController@create',
	'as'	=> 'makes.create'
]);
Route::post('agregar-marcas', [
	'uses'	=> 'CreateMakeController@store',
	'as'	=> 'makes.store'
]);

Route::get('editar-marcas/{make}/{slug}', [
	'uses'	=> 'EditMakeController@edit',
	'as'	=> 'makes.edit'
]);
Route::put('editar-marcas/{make}', [
	'uses'	=> 'EditMakeController@update',
	'as'	=> 'makes.update'
]);

Route::get('marcas', [
	'uses'	=> 'MakesController@index',
	'as'	=> 'makes.index'
]);
Route::get('marcas/{make}/logo', [
	'uses' 	=> 'MakesController@logo',
	'as'	=> 'makes.logo'
]);

//product_groups
Route::get('agregar-grupo-de-productos', [
	'uses'	=> 'CreateProductGroupController@create',
	'as'	=> 'product.groups.create'
]);
Route::post('agregar-grupo-de-productos', [
	'uses'	=> 'CreateProductGroupController@store',
	'as'	=> 'product.groups.store'
]);
Route::get('editar-grupo-de-productos/{group}/{slug}', [
	'uses'	=> 'EditProductGroupController@edit',
	'as'	=> 'product.groups.edit'
]);
Route::put('editar-grupo-de-productos/{group}', [
	'uses'	=> 'EditProductGroupController@update',
	'as'	=> 'product.groups.update'
]);

Route::get('grupos-de-productos', [
	'uses'	=> 'ProductGroupsController@index',
	'as'	=> 'product.groups.index'
]);

//products presentations
Route::get('agregar-presentacion-de-productos', [
	'uses'	=> 'CreateProductPresentationsController@create',
	'as'	=> 'product.presentations.create'
]);
Route::post('agregar-presentacion-de-productos', [
	'uses'	=> 'CreateProductPresentationsController@store',
	'as'	=> 'product.presentations.store'
]);
Route::get('editar-presentaciones-de-productos/{presentation}/{slug}', [
	'uses'	=> 'EditProductPresentationsController@edit',
	'as'	=> 'product.presentations.edit'
]);
Route::put('editar-presentaciones-de-productos/{presentation}', [
	'uses'	=> 'EditProductPresentationsController@update',
	'as'	=> 'product.presentations.update'
]);
Route::get('presentaciones-de-productos', [
	'uses'	=> 'ProductPresentationsController@index',
	'as'	=> 'product.presentations.index'
]);

//unit measures
Route::get('agregar-unidades-de-medidas', [
	'uses'	=> 'CreateUnitMeasuresController@create',
	'as'	=> 'unit.measures.create'
]);
Route::post('agregar-unidades-de-medidas', [
	'uses'	=> 'CreateUnitMeasuresController@store',
	'as'	=> 'unit.measures.store'
]);
Route::get('editar-unidad-de-medidad/{unit}/{slug}', [
	'uses'	=> 'EditUnitMeasuresController@edit',
	'as'	=> 'unit.measures.edit'
]);
Route::put('editar-unidad-de-medidad/{unit}', [
	'uses'	=> 'EditUnitMeasuresController@update',
	'as'	=> 'unit.measures.update'
]);

Route::get('unidades-de-medidas', [
	'uses' 	=> 'UnitMeasuresController@index',
	'as'	=> 'unit.measures.index'
]);

//products
Route::get('agregar-productos', [
	'uses'	=> 'CreateProductsController@create',
	'as'	=> 'products.create'
]);
Route::post('agregar-productos', [
	'uses'	=> 'CreateProductsController@store',
	'as'	=> 'products.store'
]);






