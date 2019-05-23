<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function(){
    /* API CLIENTES*/
    /* MOSTRAR TODOS LOS CLIENTES */
    Route::get('/cliente', "ClienteController@index");
    /* REGISTRAR CLIENTES */
    Route::post('/cliente', "ClienteController@store");
    /* VER INFORMACION DE UN SOLO CLIENTE A TRAVES DE SU ID */
    Route::get('/cliente/{id}', "ClienteController@show");
    /* ACTUALIZAR CLIENTES */
    Route::put('/cliente/{id}', "ClienteController@update");
    /* ELIMINAR CLIENTES */
    Route::delete('/cliente/{id}', "ClienteController@delete");



        /* API Cita*/
    /* MOSTRAR TODOS LOS Cita */
    Route::get('/cita', "CitaController@index");
    /* REGISTRAR Cita */
    Route::post('/cita', "CitaController@store");
    /* VER INFORMACION DE UN SOLO Cita A TRAVES DE SU ID */
    Route::get('/cita/{id}', "CitaController@show");
    /* ACTUALIZAR Cita */
    Route::put('/cita/{id}', "CitaController@update");
    /* ELIMINAR Cita */
    Route::delete('/cita/{id}', "CitaController@delete");




        /* API Tratamiento*/
    /* MOSTRAR TODOS LOS Tratamiento */
    Route::get('/tratamiento', "TratamientoController@index");
    /* REGISTRAR Tratamiento */
    Route::post('/tratamiento', "TratamientoController@store");
    /* VER INFORMACION DE UN SOLO CLIENTE A TRAVES DE SU ID */
    Route::get('/tratamiento/{id}', "TratamientoController@show");
    /* ACTUALIZAR Tratamiento */
    Route::put('/tratamiento/{id}', "TratamientoController@update");
    /* ELIMINAR Tratamiento */
    Route::delete('/tratamiento/{id}', "TratamientoController@delete");




        /* API Pago*/
    /* MOSTRAR TODOS LOS Pago */
    Route::get('/pago', "PagoController@index");
    /* REGISTRAR Pago */
    Route::post('/pago', "PagoController@store");
    /* VER INFORMACION DE UN SOLO Pago A TRAVES DE SU ID */
    Route::get('/pago/{id}', "PagoController@show");
    /* ACTUALIZAR Pago */
    Route::put('/pago/{id}', "PagoController@update");
    /* ELIMINAR Pago */
    Route::delete('/pago/{id}', "PagoController@delete");




        /* API Inventario*/
    /* MOSTRAR TODOS LOS Inventario */
    Route::get('/inventario', "InventarioController@index");
    /* REGISTRAR Inventario */
    Route::post('/inventario', "InventarioController@store");
    /* VER INFORMACION DE UN SOLO inventario A TRAVES DE SU ID */
    Route::get('/inventario/{id}', "InventarioeController@show");
    /* ACTUALIZAR Inventario */
    Route::put('/inventario/{id}', "InventarioController@update");
    /* ELIMINAR Inventario */
    Route::delete('/inventario/{id}', "InventarioController@delete");
});