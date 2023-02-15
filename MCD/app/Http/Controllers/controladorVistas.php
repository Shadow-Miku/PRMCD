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
}
