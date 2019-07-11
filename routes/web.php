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
Route::get('Hola','PW_Controller\MiControlador@index');
Route::get('login','PW_Controller\ControladorLogin@index');
Route::get('ver_datos','PW_Controller\ControladorLogin@verDatos');
Route::get('ver_data','PW_Controller\ControladorLogin@verDato');
Route::get('alumno_info','PW_Controller\AlumnoController@verDato');


//Practica 3
Route::post('insertar','PW_Controller\AlumnoController@inserta');
Route::get('alumno_formulario','PW_Controller\AlumnoController@insertView');

//PRACTICA 7 ELIMINAR FUULL
Route::get('alumno_eliminar_view/{nombre}','PW_Controller\AlumnoController@eliminarView');
Route::put('alumno_eliminar/{nombre}','PW_Controller\AlumnoController@eliminarDatos');

//PRACTICA 8 ELIMINAR FLAG
Route::get('alumno_eliminar_view_flag/{nombre}','PW_Controller\AlumnoController@eliminarViewFlag');
Route::put('alumno_eliminar_flag/{nombre}','PW_Controller\AlumnoController@eliminarDatosFlag');

//PRACTICA 9
Route::get('alumno_table','PW_Controller\AlumnoController@verTabla');

//Practica 03 _Tienda
Route::post('insertar03','PW_Controller\Practica03Controller@inserta');
Route::get('practica03Insertar','PW_Controller\Practica03Controller@insertView');
Route::get('practica03Consultar','PW_Controller\Practica03Controller@verDatos');
//UPDATE
Route::get('practica03UpdateView/{id}','PW_Controller\Practica03Controller@updateView');
Route::post('03Update','PW_Controller\Practica03Controller@update');

//PRACTICA 4 ENVIO
Route::get('insetar_view5','PW_Controller\Practica05Controller@ver_formulario');//FORMULARIO PARA AGREGAR UN NUEVO REGISTRO
Route::post('insertar5','PW_Controller\Practica05Controller@insertar'); //BOTON DE INSERTAR
Route::get('editar_practica5/{id}','PW_Controller\Practica05Controller@edit_datos'); //CONSULTAR DEACUERDO AL ID
Route::put('actualizar_datos/{id}','PW_Controller\Practica05Controller@actualizar_datos'); //BOTON DE ACTUALIZAR CAMBIANDO DATOS


//CRUD
Route::get('ferreteria/ver/{id}','PW_Controller\FerreteriaController@verView');

Route::get('ferreteria/insertar_view','PW_Controller\FerreteriaController@insertView');
Route::post('ferreteria/inserta','PW_Controller\FerreteriaController@insert');

Route::get('ferreteria/update_view/{id}','PW_Controller\FerreteriaController@updateView');
Route::put('ferreteria/update/{id}','PW_Controller\FerreteriaController@update');

Route::get('ferreteria/delete_view/{id}','PW_Controller\FerreteriaController@deleteView');
Route::put('ferreteria/delete/{id}','PW_Controller\FerreteriaController@delete');

Route::get('ferreteria/delete_view_flag/{id}','PW_Controller\FerreteriaController@deleteViewFlag');
Route::put('ferreteria/delete_flag/{id}','PW_Controller\FerreteriaController@deleteFlag');

Route::get('ferreteria/tabla','PW_Controller\FerreteriaController@tabla');

Route::get('/', function () {
    return view('welcome');
});



//AJAX
Route::get('ajax/lista_alumnos/{id}','PW_Controller\AjaxController@listado_alumnos');
Route::get('ajax/vista','PW_Controller\AjaxController@formu');

Route::get('ajax/lista_materias/{id}','PW_Controller\AjaxMateriaController@listado_materias');
Route::get('ajax/vista_materias','PW_Controller\AjaxMateriaController@formu');
Route::post('ajax/insertar_alumno','PW_Controller\AjaxMateriaController@inserta');


//AJAX PREEXAMEN
Route::get('ajax/producto/{id}','PW_Controller\AjaxTiendaController@producto');
Route::get('ajax/ver_producto','PW_Controller\AjaxTiendaController@lista_productos');
Route::get('ajax/productos_form','PW_Controller\AjaxTiendaController@vistaProducto');
Route::get('ajax/empresa_form','PW_Controller\AjaxTiendaController@vistaEmpresa');
Route::post('ajax/inserta_producto','PW_Controller\AjaxTiendaController@insertaProducto');
Route::post('ajax/inserta_empresa','PW_Controller\AjaxTiendaController@insertaEmpresa');
Route::get('ajax/empresa_form_editar/{id}','PW_Controller\AjaxTiendaController@editarEmpresaView');
Route::put('ajax/edita_empresa/{id}','PW_Controller\AjaxTiendaController@editarEmpresa');
Route::get('ajax/empresa_form_eliminar/{id}','PW_Controller\AjaxTiendaController@eliminarEmpresaView');
Route::put('ajax/elimina_empresa/{id}','PW_Controller\AjaxTiendaController@eliminarEmpresa');
Route::get('ajax/comprar_producto','PW_Controller\AjaxTiendaController@comprar_productos');


/************************API *********************** */
Route::get('insertar_api','PW_Controller\ApiController@imsertar');
Route::get('actualizar_api/{dato}','PW_Controller\ApiController@actualizar_api');
Route::get('eliminar_api/{dato}','PW_Controller\ApiController@eliminar_api');