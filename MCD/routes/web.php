<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes Jefe de soporte
|--------------------------------------------------------------------------
|
| Aqui se encuentran las rutas del jefe de soporte
| 
| 
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
/*
/--------------------------------------------------
/Rutas deL CRUD AUXILIAR SOPORTE vista Jefe
/--------------------------------------------------
*/


/*
/--------------------------------------------------
/Rutas deL CRUD CLIENTE vista Jefe
/--------------------------------------------------
*/


/*
/--------------------------------------------------
/Rutas deL CRUD DEPARTAMENTOS vista Jefe
/--------------------------------------------------
*/


/*
/--------------------------------------------------
/Rutas deL CRU TICKETS vista Jefe
/--------------------------------------------------
*/





/*------------------------------------------------------------------------------------------------------------------------------*/
/*
|--------------------------------------------------------------------------
| Web Routes Auxiliar de soporte
|--------------------------------------------------------------------------
|
| Aqui se encuentran las rutas del auxiliar de soporte
| 
| 
|
*/





/*------------------------------------------------------------------------------------------------------------------------------*/
/*
|--------------------------------------------------------------------------
| Web Routes Cliente
|--------------------------------------------------------------------------
|
| Aqui se encuentran las rutas del cliente / autor del ticket
| 
| 
|
*/