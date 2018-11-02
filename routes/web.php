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

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/settings', 'Settings\UserInfoController@index');
Route::post('/settings', 'Settings\UserInfoController@form');
Route::get('/settings/passchange', 'Settings\PassChangeController@index');
Route::post('/settings/passchange', 'Settings\PassChangeController@form');

Route::get('/profile/{id?}', 'ProfileController@index');

Route::get('/messages/new/{username?}', 'Messages\NewController@index');
Route::post('/messages/new/{username?}', 'Messages\NewController@form');
Route::get('/messages/inbox', 'Messages\InboxController@index');
Route::get('/messages/inbox/delete/{id}', 'Messages\InboxController@delete');
Route::get('/messages/outbox', 'Messages\OutboxController@index');
Route::get('/messages/outbox/delete/{id}', 'Messages\OutboxController@delete');
Route::get('/messages/trash', 'Messages\TrashController@index');

Route::get('/admin', 'Admin\HomeController@index');

Route::get('/admin/news/manage', 'Admin\NewsController@index');
Route::get('/admin/news/add', 'Admin\NewsController@add');
Route::get('/admin/news/categories', 'Admin\NewsController@categories');
Route::post('/admin/news/categories/{action}/{id?}', 'Admin\NewsController@categories_form');
Route::get('/admin/news/categories/{action}/{id?}', 'Admin\NewsController@categories');

Route::get('/admin/logs/{type}', 'Admin\LogsController@index');