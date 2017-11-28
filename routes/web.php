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


Route::get('medidasAprobar/{medida_id}',
	['uses' => 'MedidasController@activarMedida',
	'as' => 'medidas.aprobar']);

Route::get('participa/create/{medida_id}',
	['uses'=> 'ParticipacionController@createP',
	'as' =>'participa.create']);

Route::get('participa/inscribirU/{medida_id}',
	['uses' => 'ParticipacionController@inscribirUsuarioR',
	'as' => 'participa.usuarioR']);

Route::post('participa/inscribir/{medida_id}',
	['uses' => 'ParticipacionController@inscribirUsuario',
	'as' => 'participa.usuario']);
/*Catastrofes*/


//Destroy

Route::get('catastrofes/delete/{catastrofe_id}',
	['uses' => 'CatastrovesController@destroy',
	'as' => 'catastrofes.destroy']);

Route::get('users/delete/{users_id}',['uses' => 'UserController@destroy',
	'as' => 'users.destroy']);

  Route::get('users/edit/{users_id}',['uses' => 'UserController@update',
  	'as' => 'users.update']);

Route::get('medidas/delete/{medida_id}',['uses' =>'MedidasController@destroy',
	'as'  =>'medidas.destroy']);

Route::get('voluntarios/delete/{voluntarios_id}',['uses' =>'VoluntariosController@destroy',
	'as'  =>'voluntarios.destroy']);

Route::get('apoyos/delete/{apoyos_id}',['uses' =>'ApoyoEconomicoController@destroy',
	'as'  =>'apoyos.destroy']);
Route::get('eventos/delete/{eventos_id}',['uses' =>'EventoController@destroy',
	'as'  =>'eventos.destroy']);

Route::get('recoleccion/delete/{recoleccion_id}',['uses' =>'RecoleccionController@destroy',
	'as'  =>'recoleccion.destroy']);


Route::get('organizaciones/indexorg',['uses' =>'OrganizacionController@indexOrg',
	'as'  =>'organizaciones.muestra']);

Route::get('organizaciones/showorg/{organizacion_id}',['uses' =>'OrganizacionController@showorg',
	'as'  =>'organizaciones.showorg']);

Route::post('organizaciones/participa/{id}',['uses' =>'OrganizacionController@participa',
	'as'  =>'organizaciones.participa']);

Route::resource('organizaciones','OrganizacionController');
Route::resource('administrador/historial','HistorialController');
Route::resource('catastrofes','CatastrovesController',['except' => ['destroy']]);
Route::resource('recoleccion','RecoleccionController',['except' => ['destroy']]);
Route::resource('eventos','EventoController',['except' => ['destroy']]);
Route::resource('apoyos','ApoyoEconomicoController',['except' => ['destroy']]);
Route::resource('voluntarios','VoluntariosController',['except' => ['destroy']]);
Route::resource('medidas','MedidasController',['except' =>['destroy']]);
Route::resource('users','UserController',['except' => ['destroy']]);
Route::resource('administrador/rol','RolController');
//Route::resource('depositos','DepositosController',['except' =>['create']]);
Route::resource('participa','ParticipacionController',['except' =>['create']]);

//Route::get('depositos/create/{medida_id}',
//	['uses' => 'DepositosController@create',
//	'as' => 'deposito.create' ]);

Route::post('depositos/{medida_id}',
	['uses' => 'DepositosController@store',
	'as' => 'deposito.store' ]);

Route::post('cooperar/{aportes}',
	['uses' => 'RecoleccionController@crearCooperacion',
	'as' =>'recoleccion.cooperacion']);

Route::post('comentario/{medida_id}',
	['uses' => 'ComentarioController@store',
	'as' => 'comentario.store']);


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


Route::get('administrador', ['as'=>'admin' ,'uses'=>'MedidasController@mcrits']);
