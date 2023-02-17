<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorAuxiliar;
use DB;
use Carbon\Carbon;

class cbdauxiliares extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ConsultaAux= DB::table('tb_auxiliar')->get();
        return view('adminAuxiliar',compact('ConsultaAux'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registroAuxiliar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorAuxiliar $request)
    {
        DB::table('tb_auxiliar')->insert([
            "nameA"=> $request->input('nombre'),
            "emailA"=> $request->input('correo'),
            "usernameA"=> $request->input('usuario'),
            "password"=> $request->input('contrasena'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()
        ]);
        return redirect('adminAuxiliar/create')->with('confirmacion','abc');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultaId= DB::table('tb_auxiliar')->where('idaux',$id)->first();
        return view('eliAux', compact('consultaId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultaId= DB::table('tb_auxiliar')->where('idaux',$id)->first();

        return view('actAuxiliar', compact('consultaId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validadorAuxiliar $request, $id)
    {
            DB::table('tb_auxiliar')->where('idaux', $id)->update([
            "nameA"=> $request->input('nombre'),
            "emailA"=> $request->input('correo'),
            "usernameA"=> $request->input('usuario'),
            "password"=> $request->input('contrasena'),
            "updated_at"=> Carbon::now()
        ]);

        return redirect('adminAuxiliar')->with('actualizar','abc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_auxiliar')->where('idaux', $id)->delete();
        return redirect('adminAuxiliar')->with('eliminado','abc');
    }
}
