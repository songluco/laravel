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

//\Auth::loginUsingId(2); //使用 loginUsingId 方法通过其 ID 将用户记录到应用中
Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function(){
    Route::get('/user', function(){
        return 'you are a admin! give you a pass card!';
    });
});
