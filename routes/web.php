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


Route::get('/','PageController@home')->name('home');

Route::get('/about', [
    'as'=>'about',
    'uses'=>'PageController@about'
]);

Route::get('/contact', [
    'as'=>'message.create',
    'uses'=>'MessageController@create'
]);


Route::post('/contact', [
    'as'=>'message.store',
    'uses'=>'MessageController@store'
]);

/*Route::get('/test_mail', function(){

    return new ContactFormMail;
});*/
