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
Route::get('/inicio',['as'=> 'inicio','uses'=>'CatastrovesController@inicio']);

Auth::routes();

Route::get('medidas_info/{catastrofe_id}',
['uses' => 'MedidasController@buscarMedidas',
'as' => 'medidas.busqueda']
);

Route::post('/medidasForm',
	['uses' => 'MedidasController@createFormulario',
	'as' => 'medidas.createFormulario' ]);


Route::get('medidasCrear/{catastrofe_id}',
	['uses'  => 'MedidasController@crearMedidas',
	'as'  =>  'medidas.crear']);
/*Catastrofes*/


Route::get('catastrofes/delete/{catastrofe_id}',
	['uses' => 'CatastrovesController@destroy',
	'as' => 'catastrofes.destroy']);



Route::resource('catastrofes','CatastrovesController',['except' => ['destroy']]);
Route::resource('medidas','MedidasController');
Route::resource('voluntarios','VoluntariosController');
Route::resource('apoyos','ApoyoEconomicoController');
Route::resource('eventos','EventoController');
Route::resource('recoleccion','RecoleccionController');
Route::resource('users','UserController');
Route::resource('admin/rol','RolController');
Route::resource('depositos','DepositosController');

Route::post('welcome',
	['uses' => 'DepositosController@create',
	'as' => 'deposito.create' ]);

Route::get('depositos',
	['uses' => 'DepositosController@index',
	'as' => 'deposito.index' ]);
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


Route::get('administrador', ['as' => 'admin' ,'uses'=> function () {
    return view('admin');
}]);