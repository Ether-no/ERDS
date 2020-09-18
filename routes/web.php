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
    return view('consola');
});
Route::resource('/usersadd','UsuariosController');
Route::get('consulta/{id}', 'consultauser@consulta');
Route::get('crearencuesta/{id}', 'consultauser@encuesta')->name('crearencuesta');
Route::resource('/encuestas','EncuestasController');
