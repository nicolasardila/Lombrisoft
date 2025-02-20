@extends('layouts.master')

@section('content')
<br><br>
<div class="card">
  <div class="card-body">
   <center>
    <div class="card" style="width: 50rem">
        <h5 class="card-header">Lista de Cultivos Rentables</h5>
        <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                @if($mensaje = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{$mensaje}}
                </div>
                @endif
            </div>
        </div>
   
        <div class="table table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <th>Id</th>
                    <th>Fecha</th>
                    <th>Nombre cultivo</th>
                    <th>Tipo cultivo</th>
                    <th>Area cultivada</th>
                    <th>Presupuestos</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </thead>
                
                <tbody>
                @foreach ($datos as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->fecha}}</td>
                        <td>{{$item->nombre}}</td>
                        <td>{{$item->tipo}}</td>
                        <td>{{$item->area}}</td>
                        <td>{{$item->presupuesto}}</td>
                        <td><center><button type="button" class="btn btn-success editbtn" 
                        data-id="{{ $item->id}}" 
                        data-fecha="{{ $item->fecha}}"
                        data-nombre="{{ $item->nombre}}"  data-tipo="{{ $item->tipo}}"  
                        data-area="{{ $item->area}}" 
                        data-presupuesto="{{ $item->presupuesto}}"  
                        data-bs-toggle="modal"
                        data-bs-target="#editar">Editar<i class="fa-solid fa-file-pen"></i></button></center></td>
                       
                        <td><center><button type="button" class="btn btn-danger deletebtn" 
                        data-id="{{ $item->id}}" 
                        data-bs-toggle="modal" 
                        data-bs-target="#eliminar">Eliminar<i class="fa-solid fa-trash-can"></i></button>
                        </center></td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
   </center>
  </div>
</div>


<div class="modal fade" id="editar" tabindex="-1" aria-labelledby="editarlabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="formEditar" action="{{ route('cultivos.update',0 )}}" method="POST">
            @csrf
            @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editarlabel">Editar Cultivo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body">
                    <input type="hidden" name="id" id="edit-id">
                    <div class="mb-3"> 
                        <label for="edit-fecha" class="form-label">Fecha Cultivo</label>
                        <input type="date" class="form-control" id="edit-fecha" name="fecha">
                    </div>
                    <div class="mb-3">
                        <label for="edit-nombre" class="form-label">Nombre Cultivo</label>
                        <input type="text" class="form-control" id="edit-nombre" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="edit-tipo" class="form-label">Tipo Cultivo</label>
                        <input type="text" class="form-control" id="edit-tipo" name="tipo">
                    </div>
                    <div class="mb-3">
                        <label for="edit-area" class="form-label">Área Cultivo</label>
                        <input type="text" class="form-control" id="edit-area" name="area">
                    </div>
                    <div class="mb-3">
                        <label for="edit-presupuesto" class="form-label">Presupuesto Cultivo</label>
                        <input type="text" class="form-control" id="edit-presupuesto" name="presupuesto">
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
                                    <h5 class="modal-title" id="editarLabel">Confirmar Eliminación Cultivo</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>¿Estas seguro que desea Eliminar este Cultivo?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.editbtn').forEach(button => {
            button.addEventListener('click', function() {
                const id = this.getAttribute('data-id');
                document.getElementById('formEditar').action = `/admin/cultivos/${id}`;
                document.getElementById('edit-id').value = id;
                document.getElementById('edit-fecha').value = this.getAttribute('data-fecha');
                document.getElementById('edit-nombre').value = this.getAttribute('data-nombre');
                document.getElementById('edit-tipo').value = this.getAttribute('data-tipo');
                document.getElementById('edit-area').value = this.getAttribute('data-area');
                document.getElementById('edit-presupuesto').value = this.getAttribute('data-presupuesto');
            });
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        document.querySelectorAll('.deletebtn').forEach(button =>{
            button.addEventListener('click',function(){
                const id = this.getAttribute('data-id');
                document.getElementById('formEliminar').action = `cultivos/${id}`;
            });
        });
    });
</script>
@endsection
