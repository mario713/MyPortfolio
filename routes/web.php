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

//==========[User Settings]==========\\
Route::get('/settings', 'Settings\UserInfoController@index');
Route::post('/settings', 'Settings\UserInfoController@form');
Route::get('/settings/passchange', 'Settings\PassChangeController@index');
Route::post('/settings/passchange', 'Settings\PassChangeController@form');

Route::get('/profile/{id?}', 'ProfileController@index');

//==========[Messages]==========\\
Route::get('/messages/new/{username?}', 'Messages\NewController@index');
Route::post('/messages/new/{username?}', 'Messages\NewController@form');
Route::get('/messages/inbox', 'Messages\InboxController@index');
Route::get('/messages/inbox/delete/{id}', 'Messages\InboxController@delete');
Route::get('/messages/outbox', 'Messages\OutboxController@index');
Route::get('/messages/outbox/delete/{id}', 'Messages\OutboxController@delete');
Route::get('/messages/trash', 'Messages\TrashController@index');

//==========[Admin Panel]==========\\
Route::get('/admin', 'Admin\HomeController@index');

Route::get('/admin/news/add', 'Admin\News\NewsController@index');
Route::post('/admin/news/add', 'Admin\News\NewsController@add_form');

Route::get('/admin/news/edit/{id}', 'Admin\News\NewsController@edit');
Route::post('/admin/news/edit/{id}', 'Admin\News\NewsController@edit_form');

Route::get('/admin/news/manage', 'Admin\News\NewsManageController@index');
Route::get('/admin/news/delete/{id}', 'Admin\News\NewsManageController@delete');

Route::get('/admin/news/categories', 'Admin\News\CategoriesController@index');
Route::get('/admin/news/categories/{action}/{id?}', 'Admin\News\CategoriesController@index');
Route::post('/admin/news/categories/{action}/{id?}', 'Admin\News\CategoriesController@form');

//==========[Logs]==========\\
Route::get('/admin/logs/{type}', 'Admin\LogsController@index');