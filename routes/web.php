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

Route::get('/search', 'SearchController@search');

Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth']], function (){
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
    Route::resource('/category', 'CategoryController', ['as'=>'admin']);
    Route::resource('/articles', 'ArticleController', ['as'=>'admin']);
    Route::resource('/books', 'BookController', ['as'=>'admin']);
//    Route::post('/image/upload', 'ArticleController@upload')->name('image.upload');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Route::post('/image/upload', 'ImageController@upload')->name('image.upload');
//
//
//Route::get('/default', function () {
//    return view('default');
//});

Route::get('/departments/index', 'DepartmentsController@index')->name('departments.index');
Route::get('/departments/show', 'DepartmentsController@show')->name('departments.show');


Route::group(['prefix'=>'/', 'namespace'=>'main'], function (){
    Route::get('/', 'MainController@index');
    Route::get('/main/history', 'HistoryController@history');
    Route::get('/main/mass_media', 'Mass_mediaController@mass_media');
    Route::get('/main/museum', 'MuseumController@museum');
    Route::get('/main/map', 'MapController@map');
});

Route::group(['prefix'=>'structure', 'namespace'=>'structure'], function (){
    Route::get('/administration', 'AdministrationController@administration');
    Route::get('/director', 'AdministrationController@director');
    Route::get('/zamdirector', 'AdministrationController@zamdirector');
    Route::get('/zamdirector2', 'AdministrationController@zamdirector2');
});



Route::group(['prefix'=>'news', 'namespace'=>'news'], function (){
    Route::get('/', 'NewsController@index')->name('news.index');
    Route::get('/{id}', 'NewsController@show')->name('news.show');
});

Route::group(['prefix'=>'books', 'namespace'=>'books'], function (){
    Route::get('/', 'BooksController@index')->name('books.index');
    Route::get('/{id}', 'BooksController@show')->name('books.show');
});