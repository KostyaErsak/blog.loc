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

// Route::get('/', function (Request $request) {
//     return view('firstPage', $request);
// });
Route::get('/', ['as'=>'firstPage', 'uses'=>'SiteController@index', 'middleware'=>'web']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('tags/{id}',['as'=>'tags', 'uses'=>'TagController@index', 'middleware'=>'web']);

Route::get('categories/{id}',['as'=>'categories', 'uses'=>'CategoryController@index', 'middleware'=>'web']);

Route::get('about',['as'=>'about', 'uses'=>'AboutController@index', 'middleware'=>'web']);

Route::get('contact', ['as'=>'contact', 'uses'=>'ContactController@index', 'middleware'=>'web']);

Route::post('contact', ['uses'=>'ContactController@get', 'middleware'=>'web']);