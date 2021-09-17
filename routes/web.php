<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/phpinfo','UserController@phpinfo');

Route::group(['prefix'=>'/users/'],function(){
    Route::get('index','UserController@index');
    Route::get('lists','UserController@lists');
    Route::get('add','UserController@add');
    Route::get('edit','UserController@edit');
    Route::get('del','UserController@del');
    Route::get('test','UserController@test');
    Route::get('test1','UserController@test1');
});

Route::group(['prefix'=>'/admin/'], function(){
    Route::group(['prefix'=>'order/'], function(){
        Route::get('index', 'admin\OrderController@index');
        Route::get('goods', 'admin\OrderController@goods');
        Route::get('preview', 'admin\OrderController@preview');
        Route::post('setStatus', 'admin\OrderController@setStatus');
        Route::post('exportCsv', 'admin\OrderController@exportCsv');
    });
});

