<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cama;

class CamaController extends Controller
{
    public function index()
    {
        $camas = Cama::all();
        return view('admin.listacamas', compact('camas'));
    }

    public function create()
    {
        return view('admin.formcamas');
    }

    public function store(Request $request)
    {
        $camas = new Cama();
        $camas->numero = $request->post('numero');
        $camas->estado = $request->post('estado');
        $camas->fecha_inicio = $request->post('fecha_inicio');
        $camas->save();

        return redirect()->route('camas.index')->with('success', 'Cama creada exitosamente.');
    }

    public function show($id_cama)
    {
        $cama = Cama::findOrFail($id_cama);
        return view('admin.showcamas', compact('cama'));
    }

    public function edit($id_cama)
    {
        $cama = Cama::findOrFail($id_cama);
        return view('admin.editcamas', compact('cama'));
    }

    public function update(Request $request, $id_cama)
    {
        $cama = Cama::findOrFail($id_cama);
        $cama->numero = $request->input('numero');
        $cama->estado = $request->input('estado');
        $cama->fecha_inicio = $request->input('fecha_inicio');
        $cama->save();

        return redirect()->route('camas.index')->with('success', 'Cama actualizada correctamente.');
    }

    public function destroy($id_cama)
    {
        $cama = Cama::findOrFail($id_cama);
        $cama->delete();

        return redirect()->route('camas.index')->with('success', 'Cama eliminada correctamente.');
    }
}
