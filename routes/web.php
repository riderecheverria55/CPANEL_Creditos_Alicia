<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrdenCompra;
use App\Http\Controllers\IngresoInicialController;
use App\Http\Controllers\IngresoOrdenCompraController;

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
    // return view('admin.principal');
     return view('auth.login');
 });

Route::group(['middleware'=> ['auth']], function(){

    //ingresoOrdenCompra
    Route::get('ingresoOrdenCompra',[IngresoOrdenCompraController::class, 'index'])->name('ingresoOrdenCompra.index');
    Route::get('ingresoOrdenCompra/{id}/show',[IngresoOrdenCompraController::class, 'show'])->name('ingresoOrdenCompra.show');
    Route::get('ingresoOrdenCompra/create',[IngresoOrdenCompraController::class, 'create'])->name('ingresoOrdenCompra.create');
    Route::get('ingresoOrdenCompra/datos',[IngresoOrdenCompraController::class, 'obtenerDatos'])->name('ingresoOrdenCompra.datos');
    Route::post('ingresoOrdenCompra/store',[IngresoOrdenCompraController::class, 'store'])->name('ingresoOrdenCompra.store');
    Route::delete('ingresoOrdenCompra/destroy/{id}',[IngresoOrdenCompraController::class, 'destroy'])->name('ingresoOrdenCompra.destroy');

    //ingresoInicial
    Route::get('ingresoInicial',[IngresoInicialController::class, 'index'])->name('ingresoInicial.index');
    Route::get('ingresoInicial/{id}/show',[IngresoInicialController::class, 'show'])->name('ingresoInicial.show');
    Route::get('ingresoInicial/create',[IngresoInicialController::class, 'create'])->name('ingresoInicial.create');
    Route::post('ingresoInicial/store',[IngresoInicialController::class, 'store'])->name('ingresoInicial.store');
    Route::delete('ingresoInicial/destroy/{id}',[IngresoInicialController::class, 'destroy'])->name('ingresoInicial.destroy');
    Route::get('ingresoInicial/{id}/pdf',[IngresoInicialController::class, 'pdfVer'])->name('ingresoInicial.pdf');

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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*INGRESO PDF FRONT END*/
Route::get('/ingresoP_pdfP', function () {
    return view('admin.ingreso.pdfP');
});


/*SALIDA FRONT END*/
Route::get('/salidaP', function () {
    return view('admin.salida.indexP');
});


/*SALIDA CREAR FRONT END*/
Route::get('/salidaP_crearP', function () {
    return view('admin.salida.crearP');
});


/*SALIDA PDF FRONT END*/
Route::get('/salidaP_pdfP', function () {
    return view('admin.salida.pdfP');
});


/*CAJA FRONT END*/
Route::get('/caja', function () {
    return view('admin.caja.indexP');
});

/*CAJA PDF FRONT END*/
Route::get('/caja_pdfP', function () {
    return view('admin.caja.pdfP');
});

