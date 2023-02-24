<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
Use PDF;
use Illuminate\Support\Facades\Storage;


class cbdreportetic extends Controller
{
    public function imprimir(){
        $tickets = DB::table('tb_tickets')
                ->join('tb_cliente', 'tb_tickets.autor', '=', 'tb_cliente.idcli')
                ->join('tb_departamentos', 'tb_tickets.departamento', '=', 'tb_departamentos.idDepartamento')
                ->join('tb_auxiliar', 'tb_tickets.encargado', '=', 'tb_auxiliar.idaux')
                ->select('tb_tickets.idTicket', 'tb_cliente.nameC AS autor', 'tb_departamentos.nombre AS departamento', 'tb_tickets.created_at', 'tb_tickets.clasificacion', 'tb_auxiliar.nameA AS encargado', 'tb_tickets.estatus', 'tb_tickets.comentarios_cliente', 'tb_tickets.comentarios_al_cliente', 'tb_tickets.observaciones')
                ->get();

        $pdf = \PDF::loadView('reportetic',compact('tickets'));
        $pdf->setPaper('legal', 'landscape');
        $pdf->render();
        return $pdf->stream('reporteTickets.pdf');

   }

    public function index()
    {
        
        $tickets = DB::table('tb_tickets')
                ->join('tb_cliente', 'tb_tickets.autor', '=', 'tb_cliente.idcli')
                ->join('tb_departamentos', 'tb_tickets.departamento', '=', 'tb_departamentos.idDepartamento')
                ->join('tb_auxiliar', 'tb_tickets.encargado', '=', 'tb_auxiliar.idaux')
                ->select('tb_tickets.idTicket', 'tb_cliente.nameC AS autor', 'tb_departamentos.nombre AS departamento', 'tb_tickets.created_at', 'tb_tickets.clasificacion', 'tb_auxiliar.nameA AS encargado', 'tb_tickets.estatus', 'tb_tickets.comentarios_cliente', 'tb_tickets.comentarios_al_cliente', 'tb_tickets.observaciones')
                ->get();
        return view('reportetic',compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
