<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;
use App\Http\Requests\validadorAuxiliar;
use App\Http\Requests\validadorDepartamento;
use App\Http\Requests\validadorTicket;

class controladorVistas extends Controller
{
    /*Funciones para cada vista de la pagina, solo para visualizar la pagina, las acciones de formulario van en el web.php, aqui van las alertas tambien*/
    
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

    public function showregistroTicket(){
        return view('registroTicket');
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

    public function showreporte(){
        return view('reporte');
    }
    /*Rutas POST para envio de datos en formulario en Sitio Jefe de soporte*/
    public function procesarregistroCliente(validadorCliente $req){
        return redirect('registroCliente')->with('confirmacion','Registro de Cliente exitoso.');
    }

    public function procesarregistroAuxiliar(validadorAuxiliar $req){
        return redirect('registroAuxiliar')->with('confirmacion','Registro de Auxiliar exitoso.');
    }

    public function procesarregistroDepartamento(validadorDepartamento $req){
        return redirect('registroDepartamento')->with('confirmacion','Registro de Departamento exitoso.');
    }

    public function procesarlevantarTicket(validadorTicket $req){
        return redirect('registroTicket')->with('confirmacion','Registro de Ticket exitoso.');
    }
}

