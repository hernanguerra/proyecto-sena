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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', function () {
    return view('clientes');
});

Route::get('/cierres', function () {
    return view('cierres');
});

Route::get('/inventarios', function () {
    return view('inventarios');
});

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/usuarios', function () {
    return view('usuarios');
});

Route::get('/ventas', function () {
    return view('ventas');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* ruta de clientes */
Route::post(
    '/api/clientes/guardad',
    [App\Http\Controllers\ClientesController::class, 'guardar']
);

Route::put(
    '/api/clientes/actualizar',
    [App\Http\Controllers\ClientesController::class, 'actualizar']
);

Route::delete(
    '/api/clientes/eliminar',
    [App\Http\Controllers\ClientesController::class, 'eliminar']
);

Route::get(
    '/api/clientes/index',
    [App\Http\Controllers\ClientesController::class, 'index']
);

Route::get(
    '/api/clientes/select',
    [App\Http\Controllers\ClientesController::class, 'select']
);



/* ruta se usuario */
Route::post(
    '/api/usuarios/guardad',
    [App\Http\Controllers\UsuariosController::class, 'guardar']
);

Route::put(
    '/api/usuarios/actualizar',
    [App\Http\Controllers\UsuariosController::class, 'actualizar']
);

Route::delete(
    '/api/usuarios/eliminar',
    [App\Http\Controllers\UsuariosController::class, 'eliminar']
);

Route::get(
    '/api/usuarios/index',
    [App\Http\Controllers\UsuariosController::class, 'index']
);

Route::get(
    '/api/usuarios/select',
    [App\Http\Controllers\UsuariosController::class, 'select']
);

/* ruta de producto */
Route::post(
    '/api/productos/guardad',
    [App\Http\Controllers\ProductosController::class, 'guardar']
);

Route::put(
    '/api/productos/actualizar',
    [App\Http\Controllers\ProductosController::class, 'actualizar']
);

Route::delete(
    '/api/productos/eliminar',
    [App\Http\Controllers\ProductosController::class, 'eliminar']
);

Route::get(
    '/api/productos/index',
    [App\Http\Controllers\ProductosController::class, 'index']
);

Route::get(
    '/api/productos/select',
    [App\Http\Controllers\ProductosController::class, 'select']
);

/* ruta de venta */
Route::post(
    '/api/ventas/guardad',
    [App\Http\Controllers\VentasController::class, 'guardar']
);

Route::put(
    '/api/ventas/actualizar',
    [App\Http\Controllers\VentasController::class, 'actualizar']
);

Route::delete(
    '/api/ventas/eliminar',
    [App\Http\Controllers\VentasController::class, 'eliminar']
);

Route::get(
    '/api/ventas/index',
    [App\Http\Controllers\VentasController::class, 'index']
);

Route::get(
    '/api/ventas/select',
    [App\Http\Controllers\VentasController::class, 'select']
);

/* ruta de inventario */
Route::post(
    '/api/inventarios/guardad',
    [App\Http\Controllers\InventariosController::class, 'guardar']
);

Route::put(
    '/api/inventarios/actualizar',
    [App\Http\Controllers\InventariosController::class, 'actualizar']
);

Route::delete(
    '/api/inventarios/eliminar',
    [App\Http\Controllers\InventariosController::class, 'eliminar']
);

Route::get(
    '/api/inventarios/index',
    [App\Http\Controllers\InventariosController::class, 'index']
);
Route::get(
    '/api/inventarios/select',
    [App\Http\Controllers\InventariosController::class, 'select']
);


/* ruta de cierres */
Route::post(
    '/api/cierres/guardad',
    [App\Http\Controllers\CierresController::class, 'guardar']
);

Route::put(
    '/api/cierres/actualizar',
    [App\Http\Controllers\CierresController::class, 'actualizar']
);


Route::delete(
    '/api/cierres/eliminar',
    [App\Http\Controllers\CierresController::class, 'eliminar']
);

Route::get(
    '/api/cierres/index',
    [App\Http\Controllers\CierresController::class, 'index']
);

Route::get(
    '/api/cierres/select',
    [App\Http\Controllers\CierresController::class, 'select']
);

Auth::routes();