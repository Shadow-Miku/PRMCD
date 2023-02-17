<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorDepartamento;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class cbddepartamentos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filtrarD = $request->get('filtrarD');
        $consultaDep = DB::table('tb_departamentos')->where('nombre','like','%'.$filtrarD.'%')->get();
        $ConsultaD= DB::table('tb_departamentos')->get();
        return view('adminDepartamento',compact('ConsultaD','filtrarD','consultaDep'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registroDepartamento');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorDepartamento $request)
    {
        DB::table('tb_departamentos')->insert([
            "nombre"=> $request->input('nombre'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()
        ]);
        return redirect('departamento')->with('confirmacion','abc');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultaId= DB::table('tb_departamentos')->where('idDepartamento',$id)->first();

        return view('modalEliminarDepartamento', compact('consultaId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultaId= DB::table('tb_departamentos')->where('idDepartamento',$id)->first();
        return view('ActualizarDep', compact('consultaId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validadorDepartamento $request, $id)
    {
        
        DB::table('tb_departamentos')->where('idDepartamento',$id)->update([
            "nombre"=> $request->input('nombre'),
            "updated_at"=> Carbon::now()
        ]);

        return redirect('departamento')->with('actualizar','abc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_departamentos')->where('idDepartamento',$id)->delete();

        return redirect('departamento')->with('elimina','abc');
    }
}
