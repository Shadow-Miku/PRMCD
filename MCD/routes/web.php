<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\cbdAuxiliares;

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

/*Ruta para validador de cliente Super Usuario*/

Route::post('registroCliente', [controladorVistas::class,'procesarregistroCliente'])->name('RegiCliente');
Route::post('registroAuxiliar', [controladorVistas::class,'procesarregistroAuxiliar'])->name('RegiAuxiliar');
Route::post('registroDepartamento', [controladorVistas::class,'procesarregistroDepartamento'])->name('RegiDepartamento');

/*
/--------------------------------------------------
/Rutas deL CRUD AUXILIAR SOPORTE vista Jefe
/--------------------------------------------------
*/
    //index
    Route::get('adminAuxiliar',[cbdAuxiliares::class,'index'])->name('cbdAuxiliares.index');
    //Create
    Route::get('adminAuxiliar/create', [cbdAuxiliares::class,'create'])->name('adminAuxiliar.create');

    //store
    Route::post('adminAuxiliar', [cbdAuxiliares::class,'store'])->name('adminAuxiliar.store');

/*
/--------------------------------------------------
/Rutas deL CRUD CLIENTE vista Jefe
/--------------------------------------------------
*/
//Create
//Route::get('adminCliente/create', [cbdClientes::class,'create']) ->name('adminCliente.create');
//store
//Route::post('adminCliente', [cbdClientes::class,'store'])->name('adminCliente.store');
//index
//Route::get('adminCliente',[cbdClientes::class,'index'])->name('adminCliente.index');
//Edit
//Route::get('adminCliente/{id}/edit',[cbdClientes::class,'edit'])->name('adminCliente.edit');
//Update
//Route::put('adminCliente/{id}',[cbdClientes::class,'update'])->name('adminCliente.update');
//show
//Route::get('adminCliente/{id}/show',[cbdClientes::class,'show'])->name('adminCliente.show');
//destroy
//Route::delete('adminCliente/{id}',[cbdClientes::class,'destroy'])->name('adminCliente.destroy');

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