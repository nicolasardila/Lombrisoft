@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg rounded">
                <div class="card-header bg-warning text-white text-center">
                    <h4>Editar Cama</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('camas.update', $cama->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="numero" class="form-label">Número de la Cama</label>
                            <input type="text" name="numero" class="form-control" value="{{ $cama->numero }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="estado" class="form-label">Estado</label>
                            <input type="text" name="estado" class="form-control" value="{{ $cama->estado }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="fecha_inicio" class="form-label">Fecha de Inicio</label>
                            <input type="date" name="fecha_inicio" class="form-control" value="{{ $cama->fecha_inicio }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Actualizar</button>
                        <a href="{{ route('admin.listacamas') }}" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
