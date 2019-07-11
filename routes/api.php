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

Route::group(['prefix'=>'auth'], function(){
    Route::get('get','PW_Controller\ApiController@blackList');
    Route::post('insertar','PW_Controller\ApiController@insertar_black');
    Route::post('actualizar','PW_Controller\ApiController@actualizar_black');
    Route::put('eliminar','PW_Controller\ApiController@eliminar_black');

    //EXAMEN
    
    Route::get('buscarazon','PW_Controller\ApiController@findByRazonSocial');
    Route::post('insertar_4','PW_Controller\ApiController@insertar_4');
});