<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
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
