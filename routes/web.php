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

Route::post('/medidasForm',
	['uses' => 'MedidasController@createFormulario',
	'as' => 'medidas.createFormulario' ]);
/*Catastrofes*/

Route::resource('catastrofes','CatastrovesController');
Route::resource('medidas','MedidasController');
Route::resource('voluntarios','VoluntariosController');
Route::resource('apoyos','ApoyoEconomicoController');
Route::resource('eventos','EventoController');
Route::resource('recoleccion','RecoleccionController');
/*Medidas*/






/* TWITTER */
Route::get('twitter', 'TwitterController@twitter');
Route::post('tweet', ['as'=>'post.tweet','uses'=>'TwitterController@tweet']);

Route::get('prueba', 'PruebaController@myform');
//Route::post('select-ajax', ['as'=>'select-ajax','uses'=>'PruebaController@selectAjax']);


Route::get('catastrofes.crear', 'CatastrovesController@index');
Route::post('catastrofes',['as'=>'testeo','uses'=>'CatastrovesController@store']);
Route::post('select-ajax', ['as'=>'select-ajax','uses'=>'CatastrovesController@selectAjax']);

//rutas registro
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register',['as'=>'registro','uses'=>'Auth\RegisterController@register']);
//Route::post('register', 'Auth\RegisterController@register');