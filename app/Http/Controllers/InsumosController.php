<?php

namespace App\Http\Controllers;

use App\Models\Insumos;
use Illuminate\Http\Request;

class InsumosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Insumos::all();
        return view('admin/listai', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/forminsumo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insumos = new insumos();
        $insumos-> fecha_registro = $request->post('fecha_registro');
        $insumos-> nombre_insumo = $request->post('nombre_insumo');
        $insumos-> marca = $request->post('marca');
        $insumos-> tipo = $request->post('tipo');
        $insumos-> valor_unidad = $request->post('valor_unidad');
        $insumos-> cantidad = $request->post('cantidad');
        $insumos-> total = $request->post('total');
        $insumos-> proveedor = $request->post('proveedor');
        $insumos-> disponibilidad = $request->post('disponibilidad');
        $insumos->save();

        return redirect()->route('admin/insumos.index')->with("success","Registro Exitoso");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Insumos  $insumos
     * @return \Illuminate\Http\Response
     */
    public function show(Insumos $insumos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Insumos  $insumos
     * @return \Illuminate\Http\Response
     */
    public function edit(Insumos $insumos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Insumos  $insumos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $insumos = Insumos::findOrFail($id);
        $insumos-> fecha_registro = $request->input('fecha_registro');
        $insumos-> nombre_insumo = $request->input('nombre_insumo');
        $insumos-> marca = $request->input('marca');
        $insumos-> tipo = $request->input('tipo');
        $insumos-> valor_unidad = $request->input('valor_unidad');
        $insumos-> cantidad = $request->input('cantidad');
        $insumos-> total = $request->input('total');
        $insumos-> proveedor = $request->input('proveedor');
        $insumos-> disponibilidad = $request->input('disponibilidad');
        $insumos->save();

        return redirect() ->route('insumos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Insumos  $insumos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $insumos= Insumos::findOrFail($id);
        $insumos->delete();

        return redirect()->route('insumos.index');
    }
}
