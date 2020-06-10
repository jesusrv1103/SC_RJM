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

Route::get('/', 'Agenda\CitaController@create')->name('cita.create');

Route::post('/', 'Agenda\CitaController@store')->name('cita.store');

Route::get('descargar/{acuse}', 'Agenda\CitaController@descargarAcuse')->name('acuse.cita');

Route::get('citas/dia', 'Agenda\CitaController@index')->name('citasdeldia');

Route::get('citas/general', 'Agenda\CitaController@listadoGeneralCitas')->name('listadogeneral');

Route::get('detalles/cita/{id}', 'Agenda\CitaController@detalleCita')->name('agenda.detalle.cita');

Route::get('registrar/cita/telefono', 'Agenda\CitaController@registrarCitaTelefono')->name('registrar.cita.telefono');

Route::post('/cita/telefono', 'Agenda\CitaController@store_telefono')->name('cita.store.telefono');

Auth::routes();

Route::get('/home',  'Agenda\CitaController@listadoGeneralCitas')->name('listadogeneral');

Auth::routes();


