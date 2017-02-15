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
    return view('welcome');
});

Route::get('user',function(){
	echo "welcome to laravel";
});
Route::get('new/{c111}', function($id){
	echo "id: {$id}";
});
Route::group(['prefix'=> 'group'], function(){


Route::get('',function(){
	echo "welcome baby to laravel";
});
Route::get('{c1111}', function($id){
	echo "id: {$id}";
});

});