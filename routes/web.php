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


Route::get('/', [
'as' => 'news.in', 'uses' => 'NewsShowController@in']);
Route::resource('news','NewsController');
Route::resource('newshow','NewsShowController');
Route::post('sort', [
'as' => 'sort.save', 'uses' => 'NewsController@save']);





Route::get('user/{date}', [
'as' => 'user.date', 'uses' => 'NewsShowController@user']);

Route::get('admin/{date}', [
'as' => 'admin.date', 'uses' => 'NewsController@admin']);

Route::get('news/{id}/{co}/{dat}', [
'as' => 'news.sort', 'uses' => 'NewsController@sort']);

Route::put('news/{collection}/', [
'as' => 'news.save', 'uses' => 'NewsController@savecollection']);


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@log')->name('log');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



