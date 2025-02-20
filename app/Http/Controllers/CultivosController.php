<?php

namespace App\Http\Controllers;

use App\Models\Cultivos;
use Illuminate\Http\Request;

class CultivosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Cultivos::all();
        return view('admin/lista', compact('datos'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/formcultivo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cultivos = new cultivos();
        $cultivos-> fecha = $request->post('fecha');
        $cultivos-> nombre = $request->post('nombre');
        $cultivos-> tipo = $request->post('tipo');
        $cultivos-> area = $request->post('area');
        $cultivos-> presupuesto = $request->post('presupuesto');
        $cultivos->save();

        return redirect()->route('admin/cultivos.index')->with("success","Registro Exitoso");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cultivos  $cultivos
     * @return \Illuminate\Http\Response
     */
    public function show(Cultivos $cultivos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cultivos  $cultivos
     * @return \Illuminate\Http\Response
     */
    public function edit(Cultivos $cultivos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cultivos  $cultivos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cultivos = Cultivos::findOrFail($id);
        $cultivos->fecha = $request->input('fecha');
        $cultivos->nombre = $request->input('nombre');
        $cultivos->tipo = $request->input('tipo');
        $cultivos->area = $request->input('area');
        $cultivos->presupuesto = $request->input('presupuesto');
        $cultivos->save();

        return redirect() ->route('cultivos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cultivos  $cultivos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cultivos= Cultivos::findOrFail($id);
        $cultivos->delete();

        return redirect()->route('cultivos.index');
    }
}
