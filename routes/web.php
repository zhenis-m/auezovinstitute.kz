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

Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth']], function (){
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
    Route::resource('/category', 'CategoryController', ['as'=>'admin']);
    Route::resource('/articles', 'ArticleController', ['as'=>'admin']);
    Route::resource('/books', 'BookController', ['as'=>'admin']);
});

Route::get('/', function () {
    return view('main.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::group(['prefix'=>'/', 'namespace'=>'main'], function (){
    Route::get('/', 'MainController@index');
});

Route::group(['prefix'=>'news', 'namespace'=>'news'], function (){
    Route::get('/', 'NewsController@index')->name('news.index');
    Route::get('/{id}', 'NewsController@show')->name('news.show');
});

Route::group(['prefix'=>'books', 'namespace'=>'books'], function (){
    Route::get('/', 'BooksController@index')->name('books.index');
    Route::get('/{id}', 'BooksController@show')->name('books.show');
});