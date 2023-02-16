<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function show(){
        return view('Welcome');
    }

    public function showPrincipal(){
        return view('principalA');
    } 

    public function showLoginA(){
        return view('LoginA');
    } 

    public function showregistroAuxiliar(){
        return view('registroAuxiliar');
    } 

    public function showregistroCliente(){
        return view('registroCliente');
    } 

    public function showregistroDepartamento(){
        return view('registroDepartamento');
    }
    
    public function showadminAuxiliar(){
        return view('adminAuxiliar');
    }

    public function showadminCliente(){
        return view('adminCliente');
    }

    public function showadminTickets(){
        return view('adminTickets');
    }

    public function showadminDepartamento(){
        return view('adminDepartamento');
    }
}
