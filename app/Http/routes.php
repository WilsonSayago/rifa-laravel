<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Rutas directas a un metodo en el controlador
Route::get('/', 'IndexController@index');
Route::get('/ref', 'IndexController@index');
Route::get('iniciosesion', 'IndexController@session');
Route::get('logout','LoginController@logout');

Route::get('contacto', 'IndexController@contact');
Route::get('product/{id}/destroy', [
    'as' => 'product.idDestroy', 
    'uses' => 'ProductController@destroy'
]);
Route::get('product/catalog', [
    'as' => 'product.catalog', 
    'uses' => 'ProductController@catalog'
]);
Route::post('purcharse/call/{id}', [
	'as'   =>'purcharse.call',
	'uses' =>'PurcharseController@call'
]);
Route::get('notifypayment/notificar/{id}', [
	'as'   =>'notifypayment.notificar',
	'uses' =>'NotifyPaymentController@notificar'
]);
Route::post('purcharse/store/{id_product}',[
	'as'  => 'purcharse.store',
	'uses'=> 'PurcharseController@store'
	]);
Route::post('purchase/{id}',[
	'as'  => 'purcharse.update',
	'uses'=> 'PurcharseController@update'
	]);
Route::get('purcharse/{id}/edit',[
	'as'  => 'purcharse.edit',
	'uses'=> 'PurcharseController@edit'
	]);
Route::post('notifypayment/store/{id}',[
	'as'  => 'notifypayment.store',
	'uses'=> 'NotifyPaymentController@store'
	]);
Route::get('notice/news', [
    'as' => 'notice.news', 
    'uses' => 'NoticeController@news'
]);
Route::get('notifypayment', [
    'as' => 'notifypayment.index', 
    'uses' => 'NotifyPaymentController@index'
]);
//SHOW's fuera del Resource
Route::post('product/{id}',[
	'as'  => 'product.showClient',
	'uses'=> 'ProductController@show'
]);

Route::post('notice/{id}',[
	'as'  => 'notice.showClient',
	'uses'=> 'NoticeController@show'
]);

	Route::resource('notice', 'NoticeController');
	Route::resource('slider', 'SliderController');

	//Rutas completas para el crud
	Route::resource('user','UserController');
	Route::resource('login','LoginController');
	Route::resource('mail', 'MailController');
//Error porque el usuario no puede acceder a la ruta para comprar el nro de la rifa
Route::resource('product', 'ProductController');
//Rutas de Admin
Route::group(['middleware' => 'Admin'], function(){	
	//Route::resource('purcharse', 'PurcharseController');
	#Route::resource('product', 'ProductController');
	Route::resource('bankaccount','BankAccountController');
	Route::resource('purchase','PurcharseController');
});

//Rutas directas del sistema
Route::group(['middleware' => 'auth'], function ()
{
	Route::get('sistema','UserController@system');
	Route::resource('bankaccount','BankAccountController');
	Route::resource('purchase','PurcharseController');
	

});
