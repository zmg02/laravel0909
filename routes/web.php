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

// Route::group(['prefix'=>'/users/'],function(){
//     Route::get('index','UserController@index');
//     Route::get('lists','UserController@lists');
//     Route::get('add','UserController@add');
//     Route::get('edit','UserController@edit');
//     Route::get('del','UserController@del');
//     Route::get('test','UserController@test');
//     Route::get('test1','UserController@test1');
// });

Route::prefix('admin/order')->group(function(){
    Route::get('index', 'admin\OrderController@index');
    Route::get('goods/{id}', 'admin\OrderController@goods');
    Route::get('preview/{id}', 'admin\OrderController@preview');
    Route::post('setStatus/{id}', 'admin\OrderController@setStatus');
    Route::post('exportCsv', 'admin\OrderController@exportCsv');
});

// Route::redirect('index','admin/order/index');

// // Route::redirect('goods','admin/order/goods/1',301);
// Route::permanentRedirect('goods','admin/order/goods/1');


// //视图路由
// Route::view('name','name',['name'=>'route view'])->name('name');

// //路由命名
// Route::get('test','TestController@index')->name('test.index');

// //子域名
// Route::domain('0909.cn')->group(function(){
//     Route::get('domain', function(){
//         return '子域名路由。';
//     });
// });

// //命名空间 填写多出来的名称
// Route::namespace('Admin')->group(function(){
//     // Route::get('domain', 'Test@test');
// });

// //跳转
// Route::get('test1', function() {
    // return redirect('/');             
    // return redirect()->route('aaa');
    // return redirect()->back();
    // return redirect()->away('https://www.baidu.com');
// });



// //单个资源路由
Route::resource('users','admin\UserController');
// Route::resource('users','admin\UserController')->parameter('users','id');
// // Route::resources([
// //     'users' => 'admin\UserController',
// // ]);
// // only 只要
// //except 排除
// //API资源路由
// // Route::ApiResource('users','UserController');


// //资源路由嵌套 （去除多个id，如某篇博客的评论，可去除博客id）
Route::resource('blogs.comments','CommentController')->shallow();
// // Route::resource('users','UserController')->parameters([
// //     'users' => 'id',
// // ]);


// //回退路由
// Route::fallback(function(){
//     return redirect('/');
// });