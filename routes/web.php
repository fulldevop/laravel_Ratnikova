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

Route::get('/', 'HomeController@index')->name('home');

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'as' => 'admin.'
], function () {
    Route::get('admin', 'IndexController@index')->name('admin');
    Route::get('test1', 'IndexController@test1')->name('test1');
    Route::get('test2', 'IndexController@test2')->name('test2');
});

Route::group([
    'prefix' => 'news',
    'as' => 'news.'
], function () {
    Route::get('', 'NewsController@showCategories')->name('categories');
    Route::get('create', 'NewsController@create')->name('create');
    Route::get('{category}', 'NewsController@showList')->name('category');
    Route::get('{category}/{id}', 'NewsController@showOne')->name('newsOne');

});


/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/
