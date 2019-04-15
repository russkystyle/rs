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

//Route::get('/', function () {
//    return view('home');
//});

Route::get('/', 'PagesController@mainPage')->name('home');
Route::get('/servises', 'PagesController@servises')->name('servises');
Route::get('/servises/{ref}', 'PagesController@servise')->name('servise');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/usloviya-prozhyvaniya', 'PagesController@terms')->name('terms');
Route::get('/rewards', 'PagesController@rewards')->name('rewards');
Route::get('/rooms', 'PagesController@rooms')->name('rooms');
Route::get('/albums', 'PagesController@albums')->name('albums');
Route::get('/album/{ref}', 'PagesController@album')->name('album');
Route::get('/comments', 'PagesController@comments')->name('comments');
Route::get('/articles', 'PagesController@articles')->name('articles');
Route::get('/article/{ref}', 'PagesController@article')->name('article');
Route::get('/contacts', 'PagesController@contacts')->name('contacts');
Route::get('/news', 'PagesController@news')->name('news');
Route::get('/new/{ref}', 'PagesController@new')->name('new');
Route::get('/data', 'PagesController@changeData');
Route::post('/sendcomment', 'PagesController@sendcomment');
Route::post('/save-order', 'SaveOrderController@saveOrder');
Route::get('/save-order/success', 'SaveOrderController@success');
Route::get('/vopros-otvet', 'PagesController@voprosOtvet');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
