<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;
use DB;
use Carbon\Carbon;

class cbdclientes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ConsultaCli= DB::table('tb_cliente')->get();
        return view('adminCliente',compact('ConsultaCli'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registroCliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorCliente $request)
    {
        DB::table('tb_cliente')->insert([
            "nameC"=> $request->input('nombre'),
            "emailC"=> $request->input('correo'),
            "usernameC"=> $request->input('usuario'),
            "password"=> $request->input('contrasena'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()
        ]);
        return redirect('adminCliente')->with('confirmacion','abc');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultaId= DB::table('tb_cliente')->where('idcli',$id)->first();
        return view('eliCliente', compact('consultaId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultaId= DB::table('tb_cliente')->where('idcli',$id)->first();
        return view('actCliente', compact('consultaId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validadorCliente $request, $id)
    {
        DB::table('tb_cliente')->where('idcli', $id)->update([
            "nameC"=> $request->input('nombre'),
            "emailC"=> $request->input('correo'),
            "usernameC"=> $request->input('usuario'),
            "password"=> $request->input('contrasena'),
            "updated_at"=> Carbon::now()
        ]);

        return redirect('adminCliente')->with('actualizar','abc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_auxiliar')->where('idcli', $id)->delete();
        return redirect('adminCliente')->with('eliminado','abc');
    }
}
