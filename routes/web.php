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

Route::get('login', function () {
    return view('login.login');
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

