<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorTicket;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Models\tb_departamentos;
use App\Models\tb_cliente;

class cbdtickets extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filtrar = $request->get('filtrar');
        $consultaTicket = DB::table('tb_tickets')->where('autor','like','%'.$filtrar.'%')->get();

        $ConsultaT= DB::table('tb_tickets')->get();
        return view('adminTickets',compact('ConsultaT','filtrar','consultaTicket'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       

        return view('registroTicket');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorTicket $request)
    {
        DB::table('tb_tickets')->insert([
            "nombre"=> $request->input('autor'),
            "departamento"=> $request->input('departamento'),
            "clasificacion"=> $request->input('clasificacion'),
            "comentariocliente"=> $request->input('comentarios_cliente'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()
        ]);
        return redirect('adminTickets')->with('confirmacion','abc');
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
