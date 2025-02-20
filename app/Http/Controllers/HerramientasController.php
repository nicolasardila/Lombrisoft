<?php

namespace App\Http\Controllers;

use App\Models\Herramientas;
use Illuminate\Http\Request;

class HerramientasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Herramientas::all();
        return view('admin/listah', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/formherramientas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $herramientas = new Herramientas();
        $herramientas-> fecha_registro = $request->post('fecha_registro');
        $herramientas-> nombre_her = $request->post('nombre_her');
        $herramientas-> marca = $request->post('marca');
        $herramientas-> tipo = $request->post('tipo');
        $herramientas-> valor_unidad = $request->post('valor_unidad');
        $herramientas-> cantidad = $request->post('cantidad');
        $herramientas-> proveedor = $request->post('proveedor');
        $herramientas-> estado = $request->post('estado');
        $herramientas-> disponibilidad = $request->post('disponibilidad');
        $herramientas->save();

        return redirect()->route('admin/herramientas.index')->with("success","Registro Exitoso");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Herramientas  $herramientas
     * @return \Illuminate\Http\Response
     */
    public function show(Herramientas $herramientas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Herramientas  $herramientas
     * @return \Illuminate\Http\Response
     */
    public function edit(Herramientas $herramientas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Herramientas  $herramientas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $herramientas = Herramientas::findOrFail($id);
        $herramientas-> fecha_registro = $request->input('fecha_registro');
        $herramientas-> nombre_her = $request->input('nombre_her');
        $herramientas-> marca = $request->input('marca');
        $herramientas-> tipo = $request->input('tipo');
        $herramientas-> valor_unidad = $request->input('valor_unidad');
        $herramientas-> cantidad = $request->input('cantidad');
        $herramientas-> proveedor = $request->input('proveedor');
        $herramientas-> estado = $request->input('estado');
        $herramientas-> disponibilidad = $request->input('disponibilidad');
        $herramientas->save();

        return redirect() ->route('herramientas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Herramientas  $herramientas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $herramientas= Herramientas::findOrFail($id);
        $herramientas->delete();

        return redirect()->route('herramientas.index');
    }
}
