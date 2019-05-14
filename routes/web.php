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

Route::post('/login/custom',[
    'uses' =>'logController@login',
    'as' => 'login.custom'
]);

Route::resource('/photographer','photographer');
Route::resource('/request','requestController');
Route::resource('/images','imagesController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' =>'auth'],function(){
    // new obj from photographer 
    Route::get('/photographer_home','photographer@list')->name('/photographer_home'); 
    // new obj from pages controller 
    Route::get('/user_home','PagesController@listall')->name('/user_home');
});

Route::get('/addimage',function(){
    return view('images.add_images');
});
Route::get('/listimage','imagesController@list');


