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

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [
        'localeSessionRedirect',
        'localizationRedirect',
        'localeViewPath'
    ]
], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    



    Route::get('/culture/{id}', 'main\MainController@show')->name('main.show');
    
    Route::group(['prefix'=>'/', 'namespace'=>'main'], function (){
        Route::get('/', 'MainController@index');
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
});


    Route::group(['prefix'=>'abouts', 'namespace'=>'abouts'], function (){
        Route::get('/', 'AboutController@index')->name('abouts.index');
        Route::get('/{id}', 'AboutController@show')->name('abouts.show');
    });

Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth']], function (){
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
    Route::resource('/category', 'CategoryController', ['as'=>'admin']);
    Route::resource('/articles', 'ArticleController', ['as'=>'admin']);
    Route::resource('/books', 'BookController', ['as'=>'admin']);
    Route::resource('/cultures', 'CultureController', ['as'=>'admin']);
    Route::resource('/insts', 'InstController', ['as'=>'admin']);
    Route::resource('/departments', 'DepartmentsController', ['as'=>'admin']);
});


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');


Route::get('/departments/index', 'DepartmentsController@index')->name('departments.index');
Route::get('/departments/show', 'DepartmentsController@show')->name('departments.show');

