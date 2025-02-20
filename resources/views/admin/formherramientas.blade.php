@extends('layouts.master')
@section('content')
<br><br>
<center>
    <h1>formularios</h1>
    <div class="card" style="width: 50rem">
    <div class="card-body">
<form action="{{route('herramientas.store')}}" method="POST">
@csrf
<div class="form-group">
    <label for="">fecha de ingreso</label><br>
    <input type="date" class="form-control" style="width: 60%;" id="fecha_registro" name="fecha_registro" required> <br>
    <label for="">Nombre De Herramienta</label><br>
    <input type="text" class="form-control" style="width: 60%;" id="nombre_her" name="nombre_her" required> <br>
    <label for="">Marca Herramienta</label><br>
    <input type="text" class="form-control" style="width: 60%;" id="marca" name="marca" required> <br>
    <label for="">Tipo Herramienta</label><br>
    <input type="text" class="form-control" style="width: 60%;" id="tipo" name="tipo" required> <br>
    <label for="">Valor Unidad Herramienta</label><br>
    <input type="int" class="form-control" style="width: 60%;" id="valor_unidad" name="valor_unidad" required> <br>
    <label for="">Cantidad De Herramienta</label><br>
    <input type="text" class="form-control" style="width: 60%;" id="cantidad" name="cantidad" required> <br>
    <label for="">Proveedor</label><br>
    <input type="text" class="form-control" style="width: 60%;" id="estado" name="estado" required> <br>
    <label for="">Estado</label><br>
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