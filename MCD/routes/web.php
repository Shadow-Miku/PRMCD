<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\cbdAuxiliares;
use App\Http\Controllers\cbdDepartamentos;
use App\Http\Controllers\cbdClientes;
use App\Http\Controllers\cbdTickets;
use App\Http\Controllers\cbdreportecli;
use App\Http\Controllers\cbdreportedep;
use App\Http\Controllers\cbdreporteaux;

/*
|--------------------------------------------------------------------------
| Web Routes Jefe de soporte
|--------------------------------------------------------------------------
|
| Aqui se encuentran las rutas del jefe de soporte
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

Route::get('registroTicket', function () {
    return view('registroTicket');
});

Route::get('adminAuxiliar', function () {
    return view('adminAuxiliar');
});

Route::get('adminCliente', function () {
    return view('adminCliente');
});

Route::get('adminTicket', function () {
    return view('adminTicket');
});

Route::get('adminDepartamento', function () {
    return view('adminDepartamento');
});

Route::get('reporte', function () {
    return view('reporte');
});


/*Ruta para validador de cliente vista Jefe*/

Route::post('registroCliente', [controladorVistas::class,'procesarregistroCliente'])->name('RegiCliente');
Route::post('registroAuxiliar', [controladorVistas::class,'procesarregistroAuxiliar'])->name('RegiAuxiliar');
Route::post('registroDepartamento', [controladorVistas::class,'procesarregistroDepartamento'])->name('RegiDepartamento');
Route::post('registroTicket', [controladorVistas::class,'procesarlevantarticket'])->name('RegiTicket');

/*
/--------------------------------------------------
/Rutas deL CRUD AUXILIAR SOPORTE vista Jefe
/--------------------------------------------------
*/
    //index
    Route::get('adminAuxiliar',[cbdAuxiliares::class,'index'])->name('adminAuxiliar.index');
    //Create
    Route::get('adminAuxiliar/create', [cbdAuxiliares::class,'create'])->name('adminAuxiliar.create');
    //store
    Route::post('adminAuxiliar', [cbdAuxiliares::class,'store'])->name('adminAuxiliar.store');
    //Edit
    Route::get('adminAuxiliar/{id}/edit',[cbdAuxiliares::class,'edit'])->name('adminAuxiliar.edit');
    //Update
    Route::put('adminAuxiliar/{id}',[cbdAuxiliares::class,'update'])->name('adminAuxiliar.update');
    //show
    Route::get('adminAuxiliar/{id}/show',[cbdAuxiliares::class,'show'])->name('adminAuxiliar.show');
    //destroy
    Route::delete('adminAuxiliar/{id}',[cbdAuxiliares::class,'destroy'])->name('adminAuxiliar.destroy');

/*
/--------------------------------------------------
/Rutas deL CRUD CLIENTE vista Jefe
/--------------------------------------------------
*/
//Create
Route::get('adminCliente/create', [cbdClientes::class,'create']) ->name('adminCliente.create');
//store
Route::post('adminCliente', [cbdClientes::class,'store'])->name('adminCliente.store');
//index
Route::get('adminCliente',[cbdClientes::class,'index'])->name('adminCliente.index');
//Edit
Route::get('adminCliente/{id}/edit',[cbdClientes::class,'edit'])->name('adminCliente.edit');
//Update
Route::put('adminCliente/{id}',[cbdClientes::class,'update'])->name('adminCliente.update');
//show
Route::get('adminCliente/{id}/show',[cbdClientes::class,'show'])->name('adminCliente.show');
//destroy
Route::delete('adminCliente/{id}',[cbdClientes::class,'destroy'])->name('adminCliente.destroy');

/*
/--------------------------------------------------
/Rutas deL CRUD DEPARTAMENTOS vista Jefe
/--------------------------------------------------
*/
  //index
  Route::get('adminDepartamento',[cbdDepartamentos::class,'index'])->name('adminDepartamento.index');

  //Create
  Route::get('adminDepartamento/create', [cbdDepartamentos::class,'create'])->name('adminDepartamento.create');

  //store
  Route::post('adminDepartamento', [cbdDepartamentos::class,'store'])->name('adminDepartamento.store');

  //Edit
  Route::get('adminDepartamento/{id}/edit',[cbdDepartamentos::class,'edit'])->name('adminDepartamento.edit');

  //Update
  Route::put('adminDepartamento/{id}',[cbdDepartamentos::class,'update'])->name('adminDepartamento.update');

  //show
  Route::get('adminDepartamento/{id}/show',[cbdDepartamentos::class,'show'])->name('adminDepartamento.show');
  
  //destroy
  Route::delete('adminDepartamento/{id}',[cbdDepartamentos::class,'destroy'])->name('adminDepartamento.destroy');

/*
/--------------------------------------------------
/Rutas deL RU TICKETS vista Jefe
/--------------------------------------------------
*/

//index
Route::get('adminTickets',[cbdTickets::class,'index'])->name('adminTickets.index');

//Create
Route::get('adminTickets/create', [cbdTickets::class,'create'])->name('adminTickets.create');

//store
Route::post('adminTickets', [cbdTickets::class,'store'])->name('adminTickets.store');

//Edit
Route::get('adminTickets/{id}/edit',[cbdTickets::class,'edit'])->name('adminTickets.edit');

//Update
Route::put('adminTickets/{id}',[cbdTickets::class,'update'])->name('adminTickets.update');




/*------------------------------------------------------------------------------------------------------------------------------*/

//|--------------------------------------------------------------------------
//| Web Routes Reportes
//|--------------------------------------------------------------------------
//|
//index
Route::get('reporte',[cbdreporteaux::class,'index'])->name('reporte.index');
Route::get('reporteclientes',[cbdreportecli::class,'index'])->name('reporteclientes.index');
Route::get('reportedepa',[cbdreportedep::class,'index'])->name('reportedepa.index');
//reportedepa| 
//| 
//|

/*------------------------------------------------------------------------------------------------------------------------------*/
/*
|--------------------------------------------------------------------------
| Web Routes Cliente
|--------------------------------------------------------------------------
|
*/
Route::get('/imprimir', [cbdreporteaux::class, 'imprimir']);
Route::get('/imprimir', [cbdreportecli::class, 'imprimir']);
Route::get('/imprimir', [cbdreportedep::class, 'imprimir']);
//| 
//| 
//|



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

