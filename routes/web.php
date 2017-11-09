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

Route::get('/', ['as' => 'principal' ,function () {
    return view('welcome');
}]);
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::resource('medidas','MedidasController');
// Route::get('mis_medidas', 'MedidasController@');
Route::get('/inicio','CatastrofesController@index');
