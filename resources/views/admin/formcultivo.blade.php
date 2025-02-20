@extends('layouts.master')
@section('content')
<br><br>
<center>
    <h1>formulario</h1>
    <div class="card" style="width: 50rem">
    <div class="card-body">
<form action="{{route('cultivos.store')}}" method="POST">
@csrf
<div class="form-group">
    <label for="">fecha de ingreso</label><br>
    <input type="date" class="form-control" style="width: 60%;" id="fecha" name="fecha" required> <br>
    <label for="">nombre</label><br>
    <input type="text" class="form-control" style="width: 60%;" id="nombre" name="nombre" required> <br>
    <label for="">tipo cultivo</label><br>
    <input type="text" class="form-control" style="width: 60%;" id="tipo" name="tipo" required> <br>
    <label for="">area de cultivo</label><br>
    <input type="text" class="form-control" style="width: 60%;" id="area" name="area" required> <br>
    <label for="">presupuesto</label><br>
    <input type="int" class="form-control" style="width: 60%;" id="presupuesto" name="presupuesto" required> <br>
    <input type="submit" class="btn btn-success" value="agregar">


</div>
</form>
    </div>
    </div>
</center>
@endsection