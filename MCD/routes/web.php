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

Route::get('loginA', function () {
    return view('loginA');
});

Route::get('principalA', function () {
    return view('principalA');
});

Route::get('registroAuxiliar', function () {
    return view('registroAuxiliar');
});

Route::get('registroCliente', function () {
    return view('registroCliente');
});

Route::get('registroDepartamento', function () {
    return view('registroDepartamento');
});

Route::get('adminAuxiliar', function () {
    return view('adminAuxiliar');
});

Route::get('adminCliente', function () {
    return view('adminCliente');
});

Route::get('adminTickets', function () {
    return view('adminTickets');
});

Route::get('adminDepartamento', function () {
    return view('adminDepartamento');
});

