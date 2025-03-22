@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg rounded">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Listado de Camas</h4>
                </div>
                <div class="card-body">
                    @if ($camas->isEmpty())
                    <div class="alert alert-info text-center">
                        No hay camas registradas.
                    </div>
                    @else
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="table-dark text-center">
                                <tr>
                                    <th>#</th>
                                    <th>Número de Cama</th>
                                    <th>Estado</th>
                                    <th>Fecha de Inicio</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($camas as $item)
                                <tr>
                                    <td>{{$item->id_cama}}</td>
                                    <td>{{$item->numero}}</td>
                                    <td>{{$item->estado}}</td>
                                    <td>{{$item->fecha_inicio}}</td>
                                    <td>
                                        <center>
                                            <button type="button" class="btn btn-success editbtn"
                                                data-id_cama="{{ $item->id_cama}}"
                                                data-numero="{{ $item->numero}}"
                                                data-estado="{{ $item->estado}}"
                                                data-fecha_inicio="{{ $item->fecha_inicio}}"
                                                data-bs-toggle="modal"
                                                data-bs-target="#editar">Editar<i class="fa-solid fa-file-pen"></i></button>
                                            <button type="button" class="btn btn-danger deletebtn"
                                                data-id_cama="{{ $item->id_cama}}"
                                                data-bs-toggle="modal"
                                                data-bs-target="#eliminar">Eliminar<i class="fa-solid fa-trash-can"></i></button>
                                        </center>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="editar" tabindex="-1" aria-labelledby="editarlabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="formEditar" action="{{ route('camas.update',0 )}}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editarlabel">Editar Cama</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <input type="hidden" name="id_cama" id="edit-id_cama">
                    <div class="mb-3">
                        <label for="edit-numero" class="form-label">Numero De La Cama</label>
                        <input type="text" class="form-control" id="edit-numero" name="numero">
                    </div>
                    <div class="mb-3">
                        <label for="edit-estado" class="form-label">Estado:</label>
                        <select class="form-select" id="edit-estado" name="estado" required>
                            <option value="Disponible">Disponible</option>
                            <option value="Ocupada">Ocupada</option>
                            <option value="Mantenimiento">Mantenimiento</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="edit-fecha_inicio" class="form-label">Fecha de Inicio</label>
                        <input type="text" class="form-control" id="edit-fecha_inicio" name="fecha_inicio">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="eliminar" tabindex="-1" aria-labelledby="eliminarLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="formEliminar" action="" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title" id="editarLabel">Confirmar Eliminación de Cama</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>¿Estás seguro de que deseas eliminar esta cama?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </div>
            </form>

            </form>
        </div>
    </div>
</div>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Edit button functionality
        document.querySelectorAll('.editbtn').forEach(button => {
            button.addEventListener('click', function() {
                const id_cama = this.getAttribute('data-id_cama');
                document.getElementById('formEditar').action = `/admin/camas/${id_cama}`;
                document.getElementById('edit-id_cama').value = id_cama;
                document.getElementById('edit-numero').value = this.getAttribute('data-numero');
                document.getElementById('edit-estado').value = this.getAttribute('data-estado');
                document.getElementById('edit-fecha_inicio').value = this.getAttribute('data-fecha_inicio');
            });
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        document.querySelectorAll('.deletebtn').forEach(button =>{
            button.addEventListener('click',function(){
                const id_cama = this.getAttribute('data-id_cama');
                document.getElementById('formEliminar').action = `/admin/camas/${id_cama}`;
            });
        });
    });
</script>
@endsection