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

Route::any('/main', 'MainController@index');
Route::any('/additem', 'addItemController@index');
Route::any('/myitem', 'myItemController@index');
Route::any('/productRegister', 'addItemController@regisSuccess');
Route::any('/productdetail/{productcode}', 'productDetailController@index');
Route::any('/edit', 'myItemController@editproduct');
Route::any('/delete/{productcode}', 'myItemController@deleteproduct');
Route::any('/editProduct/{productcode}', 'myItemController@pass');
Route::any('/editprofile', 'profileController@index');
Route::any('/changeProfile', 'profileController@changeProfile');
Route::any('/search', 'MainController@search');

Auth::routes();

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
