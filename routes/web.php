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

Route::get('/', ['as' => 'principal' ,'uses'=> function () {
    return view('welcome');
}]);
Route::get('/home',['as'=> 'home','HomeController@index']);

Auth::routes();

Route::get('medidas_info/{catastrofe_id}',
['uses' => 'MedidasController@buscarMedidas',
'as' => 'medidas.busqueda']
);
/*Catastrofes*/

Route::resource('catastrofes','CatastrovesController');
Route::resource('medidas','MedidasController');
Route::resource('voluntarios','VoluntariosController');
/*Medidas*/





Route::get('prueba',['as'=> 'prueba','uses'=> 'PruebaController@index']);

/* TWITTER */
Route::get('twitter', 'TwitterController@twitter');
Route::post('tweet', ['as'=>'post.tweet','uses'=>'TwitterController@tweet']);
