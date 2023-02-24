<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorTicket;
use App\Models\tb_auxiliar;
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
        $departamento = tb_departamentos::all();
        $auxil = tb_auxiliar::all();
        $autor= tb_cliente::all();

        return view('registroTicket', compact('departamento'),compact('autor'),compact('auxil'));
  
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
            "autor"=> $request->input('autor'),
            "departamento"=> $request->input('departamento'),
            "clasificacion"=> $request->input('clasificacion'),
            "comentarios_cliente"=> $request->input('comentarios_cliente'),
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
        $departamento = tb_departamentos::all();
        $autor= tb_cliente::all();
        $auxil = tb_auxiliar::all();
        $consultaId= DB::table('tb_tickets')->where('idTicket',$id)->first();
        return view('actTicket', compact('consultaId','auxil','autor','departamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validadorTicket $request, $id)
    {
        DB::table('tb_tickets')->where('idTicket', $id)->update([
            "encargado"=> $request->input('encargado'),
            "comentarios_al_cliente"=> $request->input('comentarios_al_cliente'),
            "observaciones"=> $request->input('observaciones'),
            "updated_at"=> Carbon::now()
        ]);

        return redirect('adminTickets')->with('actualizar','abc');
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
