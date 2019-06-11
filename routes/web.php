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
//        Route::get('/main/museum', 'MuseumController@museum');
        Route::get('/main/map', 'MapController@map');
        Route::get('/main/education', 'MainController@education');
    });
    
  
    Route::get('/search', 'SearchController@search');

    Route::group(['prefix'=>'news', 'namespace'=>'news'], function (){
        Route::get('/', 'NewsController@index')->name('news.index');
        Route::get('/{id}', 'NewsController@show')->name('news.show');
    });
    
    Route::group(['prefix'=>'books', 'namespace'=>'books'], function (){
        Route::get('/', 'BooksController@index')->name('books.index');
        Route::get('/{id}', 'BooksController@show')->name('books.show');
    });


    Route::group(['prefix'=>'reader', 'namespace'=>'books'], function (){
        Route::get('/{id}', 'BooksController@show_book')->name('reader.index');
    });

    Route::group(['prefix'=>'abouts', 'namespace'=>'abouts'], function (){
        Route::get('/', 'AboutController@index')->name('abouts.index');
        Route::get('/{id}', 'AboutController@show')->name('abouts.show');
    });


    Route::group(['prefix'=>'departments', 'namespace'=>'departments'], function (){
        Route::get('/', 'DepController@index')->name('departments.index');
        Route::get('/{id}', 'DepController@show')->name('departments.show');
    });

    Route::group(['prefix'=>'sciences', 'namespace'=>'Science'], function (){
        Route::get('/', 'ScController@index')->name('sciences.index');
        Route::get('/{id}', 'ScController@show')->name('sciences.show');
    });

    Route::group(['prefix'=>'structure', 'namespace'=>'structure'], function (){
        Route::get('/administration', 'AdministrationController@administration');
        Route::get('/{id}', 'DirController@show')->name('structure.show');
    });
});

Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth']], function (){
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
    Route::resource('/category', 'CategoryController', ['as'=>'admin']);
    Route::resource('/articles', 'ArticleController', ['as'=>'admin']);
    Route::resource('/books', 'BookController', ['as'=>'admin']);
    Route::resource('/cultures', 'CultureController', ['as'=>'admin']);
    Route::resource('/insts', 'InstController', ['as'=>'admin']);
    Route::resource('/departments', 'DepartmentsController', ['as'=>'admin']);
    Route::resource('/sciences', 'ScienceController', ['as'=>'admin']);
    Route::resource('/directors', 'DirectorController', ['as'=>'admin']);
    Route::resource('/banners', 'BannerController', ['as'=>'admin']);
    Route::group(['prefix' => 'user_managment', 'namespace' => 'UserManagment'], function() {
        Route::resource('/user', 'UserController', ['as'=>'admin.user_managment']);
    });
});


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');


