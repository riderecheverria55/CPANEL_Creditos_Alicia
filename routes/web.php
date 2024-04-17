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
    return view('admin.principal');
});

Route::get('login', function () {
    return view('login.login');
});
Route::get('/usuarios', function () {
    return view('admin.usuarios.index');
});
Route::get('/usuarios_crear', function () {
    return view('admin.usuarios.crear');
});
Route::get('/usuarios_editar', function () {
    return view('admin.usuarios.editar');
});