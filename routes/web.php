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

//use Log;

// Route::get('/',function(){

// 	$plans=App\Plan::all();

// 	return view('welcome', compact('plans'));


// });

Route::get('/', 'WelcomeController@index');

//Route::get('/{name}','UsersController@show');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('/subscriptions', 'SubscriptionsController@store');
Route::delete('/subscriptions', 'SubscriptionsController@destroy');
Route::patch('/subscriptions', 'SubscriptionsController@update');

Route::post('stripe/webhook', 'WebhooksController@handle');

// Route::get('videos/{video}', 'VideosController@show');
Route::resource('videos', 'VideosController');

Route::post('/emails', 'EmailsController@store');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('profile','UsersController@profile');
Route::post('profile','UsersController@update_avatar');
Route::post('profile/{id}', 'UsersController@delete_account');

Route::get('/users/confirmation/{token}', 'Auth\RegisterController@confirmation')->name('confirmation');

Route::get('auth/{provider}', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');

Route::get('items-lists', ['as'=>'items-lists','uses'=>'WelcomeController@index']);