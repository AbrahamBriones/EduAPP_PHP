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
Route::get('plantilla', function () {
    return view('plantilla');
})->name('plantilla');













Route::get('/', function () {
    return view('inicio');
});


// Rutas de prueba
Route::get('inicio', function () {
    return view('inicio');
})->name('inicio');

// Route::get('avisos', function () {
//     return view('avisos');
// })->name('avisos');
Route::get('/actividades/asignaturas', 'ActividadController@obtenerAsignaturas');


Route::get('actividades', function () {
    return view('actividades');
})->name('actividades');


Route::get('/actividades', 'ActividadController@index')->name('actividades');
Route::get('/actividades/get', 'ActividadController@get_events');
Route::post('/actividades/store', 'ActividadController@store');
Route::post('/actividades/update', 'ActividadController@update')->name('updateActividad');
//Route::post('/actividades/delete', 'ActividadController@destroy');

Route::get('/obtenerAviso', 'AvisoController@obtenerAviso')->name('obtenerAviso');
Route::get('/listarAviso', 'AvisoController@listarAviso')->name('listarAviso');
Route::post('/guardarAviso', 'AvisoController@guardarAviso')->name('guardarAviso');

Route::get('notas', function () {
    return view('notas');
})->name('notas');

Route::get('anotaciones', function () {
    return view('anotaciones');
})->name('anotaciones');

//Route::resource('actividades', 'ActividadController',['only' => ['index', 'store', 'update', 'destroy']]);

Route::resource('eventos', 'ActividadController', ['only' => ['index', 'store', 'update', 'destroy']]);
