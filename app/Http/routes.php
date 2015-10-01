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
//header('Access-Control-Allow-Origin: http://app:4200');
//header('Access-Control-Allow-Methods: GET, POST, OPTIONS');

header('Access-Control-Allow-Origin: http://app:4200');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS , DELETE, PUT');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
header('Access-Control-Allow-Credentials: true');

//var_dump(http_get_request_body());

//首頁
Route::get('/', 'AppController@index');
////contact
//Route::get('contact', 'WelcomeController@contact');
//
//Route::get('home', 'HomeController@index');
//
//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);

Route::get('about' , 'PagesController@about');
Route::get('rwd', 'RwdController@rwd');
//articels
Route::get('articles', 'ArticlesController@index');
// create


 // post
//new
Route::post('posts', 'ArticlesController@create');
//find id
Route::get('posts/{id}', 'ArticlesController@find');
// get all
Route::get('posts', 'ArticlesController@index');
//update
Route::put('posts/{id}', 'ArticlesController@update');
//delete
Route::delete('posts/{id}', 'ArticlesController@delete');

Route::get("users" , "UserController@index" );


//case insensitive
//Route::pattern('rwd', '(?i)rwd(?-i)');
//Route::get('{rwd}' , 'RwdController@rwd');
