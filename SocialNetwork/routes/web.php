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

Route::get('/', function () {
    if (Auth::check()) {
    	return redirect()->back();
    }
    return view('login');
});

Route::get('send-message','RedisController@index');
Route::post('send-message','RedisController@postSendMessage');

Route::post('user/login','UserController@login');

Route::group(['middleware' => 'isUser','prefix' => 'user'],function() {

	Route::get('/body','UserController@viewBody');

	Route::get('/logout','UserController@logout');

});

Route::group(['middleware' => 'isUser','prefix' => 'message'],function() {

	Route::get('/getMessageByName','MessageController@getMessageByName');

	Route::get('/getUserMessage','MessageController@getUserMessage');

});
