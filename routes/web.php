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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create',function(){
	return view('pasport.create');

});
Route::post('/store','PasportController@store');
 Route::get('/index','PasportController@index');
  Route::get('/email',function(){
  	return view('pasport.email');
  });
  Route::get('/emailTo',function(){
  	return view('pasport.emailTo');
  });
 
  Route::post('/send','PasportController@send');
  Route::post('/sendTo','PasportController@sendTo');

  Route::get('index/{id}/edit','PasportController@edit');
  Route::put('index/{id}/update','PasportController@update');

  Route::delete('index/{id}/destory','PasportController@destory');
 
 Route::get('/search','PasportController@search');
 //Route::post('full-text-search/action','PasportController@action')->name('full-text-search.action');
