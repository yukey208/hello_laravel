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

Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help','StaticPagesController@help')->name('help');
Route::get('/about','StaticPagesController@about')->name('about');
// 注册用户，获取用户信息
Route::get('singup','UserController@singup')->name('singup');
Route::resource('users','UserController');
// 显示登陆页面，创建新登陆会话，销毁会话（退出登陆）
Route::get('login','SessionController@create')->name('login');
Route::post('login','SessionController@stroe')->name('login');
Route::delete('logout','SessionController@destroy')->name('logout');