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
    return view('LoginDoria.login');
});

Route::get('/loginn', function () {
    return view('LoginDoria.login');
});

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::post('login', 'Auth\LoginController@login');

Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

Route::post('password/reset', 'Auth\ResetPasswordController@reset');

//Permisos
Route::get('permisos', 'PermisoController@index')->name('permisos.index');


//Usuario
Route::get('/usuario/perfil', 'UserController@show_account')->name('usuario.perfil');

Route::put('/usuarioPerfil/{user}', 'UserController@updatePerfil')->name('usuarioperfil.update');


//Jefe de Proceso
Route::get('/usuario/{user}', 'UserController@show')->name('usuario.show');

Route::put('/usuario/{user}', 'UserController@update')->name('usuario.update');

Route::delete('/usuario/{user}', 'UserController@destroy')->name('usuario.destroy');

Route::get('/lista', 'UserController@index')->name('usuario.list');

Route::get('/nuevo', 'UserController@create')->name('usuario.create');

Route::post('/crear', 'UserController@store');

//Distribuidor
Route::get('/distribuidor/{user}', 'DistribuidorController@show')->name('distribuidor.show');

Route::put('/distribuidor/{user}', 'DistribuidorController@update')->name('distribuidor.update');

Route::delete('/distribuidor/{user}', 'DistribuidorController@destroy')->name('distribuidor.destroy');

Route::get('/distribuidor.lista', 'DistribuidorController@index')->name('distribuidor.list');

Route::get('/distribuidor.nuevo', 'DistribuidorController@create')->name('distribuidor.create');

Route::post('/distribuidor.crear', 'DistribuidorController@store');

//Detallista
Route::get('/detallista/{user}', 'DetallistaController@show')->name('detallista.show');

Route::put('/detallista/{user}', 'DetallistaController@update')->name('detallista.update');

Route::delete('/detallista/{user}', 'DetallistaController@destroy')->name('detallista.destroy');

Route::get('/detallista.lista', 'DetallistaController@index')->name('detallista.list');

Route::get('/detallista.nuevo', 'DetallistaController@create')->name('detallista.create');

Route::post('/detallista.crear', 'DetallistaController@store');

//Detallista
Route::get('/proveedor/{user}', 'ProveedorController@show')->name('proveedor.show');

Route::put('/proveedor/{user}', 'ProveedorController@update')->name('proveedor.update');

Route::delete('/proveedor/{user}', 'ProveedorController@destroy')->name('proveedor.destroy');

Route::get('/proveedor.lista', 'ProveedorController@index')->name('proveedor.list');

Route::get('/proveedor.nuevo', 'ProveedorController@create')->name('proveedor.create');

Route::post('/proveedor.crear', 'ProveedorController@store');



//Costo Transporte
Route::get('/costotransporte/{costo}', 'CostoTransporteController@show')->name('costotransporte.show');

Route::put('/costotransporte/{costo}', 'CostoTransporteController@update')->name('costotransporte.update');

Route::delete('/costotransporte/{costo}', 'CostoTransporteController@destroy')->name('costotransporte.destroy');

Route::get('/costotransporte.lista', 'CostoTransporteController@index')->name('costotransporte.list');

Route::get('/costotransporte.nuevo', 'CostoTransporteController@create')->name('costotransporte.create');

Route::post('/costotransporte.crear', 'CostoTransporteController@store');

//Compra Proveedor
Route::get('/compraproveedor/{compra}', 'CompraProveedorController@show')->name('compraproveedor.show');

Route::put('/compraproveedor/{compra}', 'CompraProveedorController@update')->name('compraproveedor.update');

Route::delete('/compraproveedor/{compra}', 'CompraProveedorController@destroy')->name('compraproveedor.destroy');

Route::get('/compraproveedor.lista', 'CompraProveedorController@index')->name('compraproveedor.list');

Route::get('/compraproveedor.nuevo', 'CompraProveedorController@create')->name('compraproveedor.create');

Route::post('/compraproveedor.crear', 'CompraProveedorController@store');

//Producción Diaria
Route::get('/produccion/{compra}', 'ProduccionController@show')->name('produccion.show');

Route::put('/produccion/{compra}', 'ProduccionController@update')->name('produccion.update');

Route::delete('/produccion/{compra}', 'ProduccionController@destroy')->name('produccion.destroy');

Route::get('/produccion.lista', 'ProduccionController@index')->name('produccion.list');

Route::get('/produccion.nuevo', 'ProduccionController@create')->name('produccion.create');

Route::post('/produccion.crear', 'ProduccionController@store');

//Costos
Route::get('/costo/{costo}', 'CostoController@show')->name('costo.show');

Route::put('/costo/{costo}', 'CostoController@update')->name('costo.update');

Route::delete('/costo/{costo}', 'CostoController@destroy')->name('costo.destroy');

Route::get('/costo.lista', 'CostoController@index')->name('costo.list');

Route::get('/costo.nuevo', 'CostoController@create')->name('costo.create');

Route::post('/costo.crear', 'CostoController@store');

//Inventario
Route::resource('inventario', 'InventarioController');

//Utilidad

Route::get('/diario', 'InventarioController@showdiario')->name('utilidad.diario');

Route::get('/mensual', 'InventarioController@showmensual')->name('utilidad.mensual');

Route::get('/diario/{fecha}', 'InventarioController@showutilidaddiario')->name('showutilidad.diario');

Route::get('/mensual/{fecha}', 'InventarioController@showutilidadmensual')->name('showutilidad.mensual');

//Spaghetti
Route::resource('spaghetti', 'SpaghettiController');

//CarritoCompras
Route::resource('carrito', 'CarritoCompraController');