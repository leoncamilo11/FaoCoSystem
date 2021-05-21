<?php

use Illuminate\Support\Facades\Route;

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

//Rutas de autenticacion
Route::get('/', 'Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::post('/ajax-sesion', 'Auth\LoginController@setSession')->name('ajax')->middleware('auth');

//Rutas del Sistema
Route::group(['middleware'=>['auth']], function(){
  //Ruta Principal
  Route::get('dashboard', 'DashboardController@index')->name('dashboard');
  //Rutas Proyectos
  Route::resource('/proyectos', 'ProyectosController');
  //Rutas Usuarios
  Route::resource('/usuarios', 'UsuariosController');
  //Rutas SedesController
  Route::resource('/sedes', 'SedesController');
  //Rutas Salas
  Route::resource('/salas', 'SalasController');
  //Rutas Correspondencias
  //Rutas Correspondencias General
  Route::resource('/correspondencias/general', 'CorrespondenciasGController');
  Route::get('ciudades/{id}', 'CorrespondenciasGController@getCiudades');
  // Rutas Correspondencias tesoreria
  Route::resource('/correspondencias/tesoreria', 'CorrespondenciasTController');
  Route::get('proveedor/{id}', 'CorrespondenciasTController@getInfoProveedor');
  Route::get('proyecto/{id}', 'CorrespondenciasTController@getInfoProyecto');
  /*Route::get('correspondencias/mainIndex', 'CorrespondenciasController@mainIndex')->name('correspondencias.mainIndex');
  Route::get('correspondencias/mainCreate', 'CorrespondenciasController@mainCreate')->name('correspondencias.mainCreate');
  Route::get('correspondencias/emision/create', 'CorrespondenciasController@createEmision')->name('correspondencias.emision.create');
  Route::post('correspondencias/emision/createEmision2', 'CorrespondenciasController@createEmision2')->name('correspondencias.emision.createEmision2');
  Route::get('correspondencias/recepcion/create', 'CorrespondenciasController@createRecepcion')->name('correspondencias.recepcion.create');*/
});
