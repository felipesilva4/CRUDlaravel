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
Route::group(['middleware'=> ['auth']], function(){
    
    Route::get ('new', 'ProdutosController@new')->name('produtos.new');
    Route::post('store', 'ProdutosController@store')->name ('produtos.store');
    Route::get('edit/{produtos}/','ProdutosController@edit')->name ('produtos.edit');
    Route::any('update/{id}','ProdutosController@update')->name ('produtos.update');
    Route::get('delete/{id}','ProdutosController@delete')->name ('produtos.remove');

    Route::prefix('users')->group(function(){
        Route::get('/', 'UserController@index')->name('user.index');
            Route::get('new', 'UserController@new')->name('user.new');
            Route::post('store', 'UserController@store')->name('user.store');
            Route::get('edit/{user}', 'UserController@edit')->name('user.edit');
            Route::post('update/{id}', 'UserController@update')->name('user.update');
            Route::get('delete/{id}', 'UserController@delete')->name('user.remove');  
    });

});
Auth::routes();
Route::get('index', 'ProdutosController@index')->name('produtos.index');

Route::get('/home', 'HomeController@index')->name('home');
