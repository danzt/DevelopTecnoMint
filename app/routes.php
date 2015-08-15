<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function(){
	return Redirect::to("/inventario");
});

Route::get("/inicio","InventarioController@inicio");
Route::get('/inventario', "InventarioController@home");
Route::post("/formulario", "UsuarioController@registrar_usuario");
Route::get("/catalogo", "InventarioController@mostrar_catalogo");

Route::get("/home", function(){
	return Redirect::to("/inventario");
});
Route::get("/categoria","InventarioController@mostrar_categoria");
Route::get("/perfil", "UsuarioController@mostrar_perfil");
Route::get("/mas", "ExtrasController@mas_extras");
Route::get("/pagar_credito", "ExtrasController@pagos_credito");
Route::get("/pagar_transferencia","ExtrasController@pagos_transferencia");
Route::get("/pagar_debito", "ExtrasController@pagos_debito");