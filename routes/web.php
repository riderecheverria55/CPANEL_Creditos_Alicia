<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrdenCompra;

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

//clientes
Route::get('clientes',[ClienteController::class, 'index'])->name('clientes.index');
Route::get('clientes/{id}/show',[ClienteController::class, 'show'])->name('clientes.show');
Route::get('clientes/create',[ClienteController::class, 'create'])->name('clientes.create');
Route::post('clientes/store',[ClienteController::class, 'store'])->name('clientes.store');
Route::delete('clientes/destroy/{id}',[ClienteController::class, 'destroy'])->name('clientes.destroy');
Route::get('clientes/{id}/edit',[ClienteController::class, 'edit'])->name('clientes.edit');
Route::put('clientes/update/{id}',[ClienteController::class, 'update'])->name('clientes.update');

//proveedores

Route::get('proveedores',[ProveedorController::class, 'index'])->name('proveedores.index');
Route::post('proveedores/store',[ProveedorController::class, 'store'])->name('proveedores.store');
Route::delete('proveedores/destroy/{id}',[ProveedorController::class, 'destroy'])->name('proveedores.destroy');
Route::put('proveedores/update/{id}',[ProveedorController::class, 'update'])->name('proveedores.update');

// Sucursales

Route::get('sucursales',[SucursalController::class, 'index'])->name('sucursales.index');
Route::post('sucursales/store',[SucursalController::class, 'store'])->name('sucursales.store');
Route::delete('sucursales/destroy/{id}',[SucursalController::class, 'destroy'])->name('sucursales.destroy');
Route::put('sucursales/update/{id}',[SucursalController::class, 'update'])->name('sucursales.update');

// Items

Route::get('items',[ItemController::class, 'index'])->name('items.index');
Route::get('items/{id}/show',[ItemController::class, 'show'])->name('items.show');
Route::get('items/create',[ItemController::class, 'create'])->name('items.create');
Route::post('items/store',[ItemController::class, 'store'])->name('items.store');
Route::delete('items/destroy/{id}',[ItemController::class, 'destroy'])->name('items.destroy');
Route::get('items/{id}/edit',[ItemController::class, 'edit'])->name('items.edit');
Route::put('items/update/{id}',[ItemController::class, 'update'])->name('items.update');

// Orden de Compra
Route::get('ordeDeCompra',[OrdenCompra::class, 'index'])->name('ordeDeCompra.index');
Route::get('ordeDeCompra/{id}/show',[OrdenCompra::class, 'show'])->name('ordeDeCompra.show');
Route::get('ordeDeCompra/create',[OrdenCompra::class, 'create'])->name('ordeDeCompra.create');
Route::post('ordeDeCompra/store',[OrdenCompra::class, 'store'])->name('ordeDeCompra.store');
Route::delete('ordeDeCompra/destroy/{id}',[OrdenCompra::class, 'destroy'])->name('ordeDeCompra.destroy');
Route::get('ordeDeCompra/{id}/edit',[OrdenCompra::class, 'edit'])->name('ordeDeCompra.edit');
Route::put('ordeDeCompra/update/{id}',[OrdenCompra::class, 'update'])->name('ordeDeCompra.update');


Route::get('/', function () {
    return view('admin.principal');
});
/*INICIO DE CECION*/
Route::get('login', function () {
    return view('login.login');
});
/*REGISTRARSE*/
Route::get('registrar', function () {
    return view('login.registrar');
});

/*USUARIOS*/
Route::get('/usuarios', function () {
    return view('admin.usuarios.index');
});
Route::get('/usuarios_crear', function () {
    return view('admin.usuarios.crear');
});
Route::get('/usuarios_editar', function () {
    return view('admin.usuarios.editar');
});


/*ROLES*/
Route::get('/roles', function () {
    return view('admin.roles.index');
});
Route::get('/roles_crear', function () {
    return view('admin.roles.crear');
});
Route::get('/roles_editar', function () {
    return view('admin.roles.editar');
});


/*PERMISOS*/
Route::get('/permisos', function () {
    return view('admin.permisos.index');
});
Route::get('/permisos_crear', function () {
    return view('admin.permisos.crear');
});
Route::get('/permisos_editar', function () {
    return view('admin.permisos.editar');
});

/*CLIENTES*/
Route::get('/cliente', function () {
    return view('admin.cliente.index');
});
Route::get('/cliente_crear', function () {
    return view('admin.cliente.crear');
});
Route::get('/cliente_editar', function () {
    return view('admin.cliente.editar');
});
Route::get('/cliente_ver', function () {
    return view('admin.cliente.ver');
});

/*PROVEEDORES*/
// Route::get('/proveedor', function () {
//     return view('admin.proveedores.index');
// });

/*SUCRURSALES*/
Route::get('/sucursal', function () {
    return view('admin.sucursal.index');
});

















/*PROVEEDORES  FRONT END*/
Route::get('/proveedoresP', function () {
    return view('admin.proveedores.indexP');
});


/*SUCRURSALES  FRONT END*/
Route::get('/sucursalP', function () {
    return view('admin.sucursal.indexP');
});

/*ALMACEN FRONT END*/
Route::get('/almacenP', function () {
    return view('admin.almacen.indexP');
});

/*REGISTRO DE ITENS FRONT END*/
Route::get('/itensP', function () {
    return view('admin.itens.indexP');
});


/*R CATEGORIA_SUBCATEGORIA FRONT END*/
Route::get('/categoria_subP', function () {
    return view('admin.categoria_sub.indexP');
});


/*COMPRA FRONT END*/
Route::get('/compraP', function () {
    return view('admin.compra.indexP');
});

/*COMPRA CREAR FRONT END*/
Route::get('/compraP_crearP', function () {
    return view('admin.compra.crearP');
});

/*COMPRA ver FRONT END*/
Route::get('/compraP_verP', function () {
    return view('admin.compra.verP');
});

/*PDF ORDEN DE COMPRA FRONT END*/
Route::get('/compraP_pdfP', function () {
    return view('admin.compra.pdfP');
});







/*INGRESO FRONT END*/
Route::get('/ingresoP', function () {
    return view('admin.ingreso.indexP');
});
/*INGRESO CREAR FRONT END*/
Route::get('/ingresoP_crearP', function () {
    return view('admin.ingreso.crearP');
});

/*INGRESO VER FRONT END*/
Route::get('/ingresoP_verP', function () {
    return view('admin.ingreso.verP');
});

/*INGRESO PDF FRONT END*/
Route::get('/ingresoP_pdfP', function () {
    return view('admin.ingreso.pdfP');
});