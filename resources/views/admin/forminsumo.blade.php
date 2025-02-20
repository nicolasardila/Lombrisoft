@extends('layouts.master')
@section('content')
<br><br>
<center>
    <h1>formularios</h1>
    <div class="card" style="width: 50rem">
    <div class="card-body">
<form action="{{route('insumos.store')}}" method="POST">
@csrf
<div class="form-group">
    <label for="">fecha de ingreso</label><br>
    <input type="date" class="form-control" style="width: 60%;" id="fecha_registro" name="fecha_registro" required> <br>
    <label for="">nombre de insumo</label><br>
    <input type="text" class="form-control" style="width: 60%;" id="nombre_insumo" name="nombre_insumo" required> <br>
    <label for="">marca insumo</label><br>
    <input type="text" class="form-control" style="width: 60%;" id="marca" name="marca" required> <br>
    <label for="">tipo Insumo</label><br>
    <input type="text" class="form-control" style="width: 60%;" id="tipo" name="tipo" required> <br>
    <label for="">valor unidad insumo</label><br>
    <input type="int" class="form-control" style="width: 60%;" id="valor_unidad" name="valor_unidad" required> <br>
    <label for="">cantidad de insumo</label><br>
    <input type="text" class="form-control" style="width: 60%;" id="cantidad" name="cantidad" required> <br>
    <label for="">total</label><br>
    <input type="int" class="form-control" style="width: 60%;" id="total" name="total" required> <br>
    <label for="">proveedor</label><br>
    <input type="text" class="form-control" style="width: 60%;" id="proveedor" name="proveedor" required> <br>
    <label for="login_rol" class="block text-gray-700 font-bold mb-2">Disponibilidad</label>
    <select id="disponibilidad" name="disponibilidad" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
        <option value="">Seleccione</option>
        <option>Si</option>
        <option>No</option>
    </select><br>
    <input type="submit" class="btn btn-success" value="agregar">
</div>
</form>
    </div>
    </div>
</center>
@endsection