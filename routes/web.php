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

Route::get('/', ['as'=>'firstPage', 'uses'=>'SiteController@index']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('about', ['as'=>'about', 'uses'=>'AboutController@index']);

Auth::routes();

Route::group(['middleware'=>'web'], function (){
    
    Route::get('/post/{id}', ['uses' => 'PostController@index', 'as' => 'single']);
    Route::post('/post/', ['uses' => 'PostController@addComment', 'as' => 'single_p']);
    Route::get('tags/{id}',['as'=>'tags', 'uses'=>'TagController@index']);
    Route::get('categories/{id}',['as'=>'categories', 'uses'=>'CategoryController@index']);
    Route::get('contact', ['as'=>'contact', 'uses'=>'ContactController@index']);
    Route::post('contact', ['uses'=>'ContactController@get', 'as' => 'contact']);
    
});