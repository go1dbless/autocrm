<?php

Route::get('',function(){
   return \Illuminate\Support\Facades\Redirect::to('potential');
});

Route::group([
    'prefix'=>'stock',
],function(){
    Route::get('', 'AppController@index');
});


Route::group([
    'prefix'=>'active',
],function(){
    Route::get('', 'AppController@index');
});


Route::group([
    'prefix'=>'stat',
],function(){
    Route::get('', 'AppController@index');
});



Route::group([
    'prefix'=>'potential',
],function(){
    Route::get('', 'AppController@index');
});


Route::group([
    'prefix'=>'employ',
],function(){
    Route::get('', 'AppController@index');
    Route::get('user-list', 'UsersController@index');
    Route::post('save-user', 'UsersController@store');
    Route::post('delete', 'UsersController@delete');
});






Auth::routes();
