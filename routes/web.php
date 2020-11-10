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

//
Route::get('/', [
    'uses' => 'HomeController@index',
    'as'   => '/'
]);

Route::get('/package', [
    'uses' => 'PackageController@index',
    'as'   => '/package'
]);

Route::get('/monitor', [
    'uses' => 'MonitorController@index',
    'as'   => '/monitor'
]);

Route::get('/userlogin', [
    'uses' => 'UserloginController@index',
    'as'   => '/userlogin'
]);

Route::get('/userregi', [
    'uses' => 'UserregiController@index',
    'as'   => '/userregi'
]);

Route::get('/gallery', [
    'uses' => 'GalleryController@index',
    'as'   => '/gallery'
]);

Route::get('/about', [
    'uses' => 'AboutController@index',
    'as'   => '/about'
]);

Route::get('/contact', [
    'uses' => 'ContactController@index',
    'as'   => '/contact'
]);
