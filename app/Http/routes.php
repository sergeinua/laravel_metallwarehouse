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


Route::get('/', ['as' => 'home', 'uses' => 'SiteController@index']);

Route::get('/metalloprokat/{cat}', 'SiteController@category');

Route::get('/metalloprokat/{cat}/{subcat}', 'SiteController@subcategory');

Route::get('/metalloprokat/{cat}/{subcat}/{slug}', 'SiteController@slug');

Route::post('/message', 'OrderController@message');

Route::auth();

Route::get('/admin', 'SettingsController@index');

Route::get('/admin/settings/delete/{id}', 'SettingsController@delete');

Route::get('admin/settings/edit/{id}', 'SettingsController@edit');

Route::post('admin/settings/edit/{id}', 'SettingsController@edit');

Route::get('admin/settings/create', 'SettingsController@create');

Route::post('admin/settings/create', 'SettingsController@create');

Route::get('admin/menu', 'MenuController@index');

Route::get('/register', function (){
    return \Redirect::route('home');
});