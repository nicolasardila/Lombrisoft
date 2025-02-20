@extends('layouts.master')

@section('content')
<br><br>
<div class="card">
  <div class="card-body">
   <center>
    <div class="card" style="width: 80rem">
        <h5 class="card-header">Lista de Insumos Rentables</h5>
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
                    <th>Nombre Insumo</th>
                    <th>Marca</th>
                    <th>Tipo</th>
                    <th>Valor Unidad Insumo</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Proveedor</th>
                    <th>Disponibilidad</th>
                    <th>Acciones</th>
                </thead>
                
                <tbody>
                @foreach ($datos as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->fecha_registro}}</td>
                        <td>{{$item->nombre_insumo}}</td>
                        <td>{{$item->marca}}</td>
                        <td>{{$item->tipo}}</td>
                        <td>{{$item->valor_unidad}}</td>
                        <td>{{$item->cantidad}}</td>
                        <td>{{$item->total}}</td>
                        <td>{{$item->proveedor}}</td>
                        <td>{{$item->disponibilidad}}</td>
                        <td><center><button type="button" class="btn btn-success editbtn" 
                        data-id="{{ $item->id}}" 
                        data-fecha_registro="{{ $item->fecha_registro}}"
                        data-nombre_insumo="{{ $item->nombre_insumo}}"
                        data-marca="{{ $item->marca}}"
                        data-tipo="{{ $item->tipo}}"    
                        data-valor_unidad="{{ $item->valor_unidad}}" 
                        data-cantidad="{{ $item->cantidad}}"
                        data-total="{{ $item->total}}"  
                        data-proveedor="{{ $item->proveedor}}"  
                        data-disponibilidad="{{ $item->disponibilidad}}"    
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
            <form id="formEditar" action="{{ route('insumos.update',0 )}}" method="POST">
            @csrf
            @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editarlabel">Editar Insumo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body">
                    <input type="hidden" name="id" id="edit-id">
                    <div class="mb-3"> 
                        <label for="edit-fecha_registro" class="form-label">Fecha Cultivo</label>
                        <input type="date" class="form-control" id="edit-fecha_registro" name="fecha_registro">
                    </div>
                    <div class="mb-3">
                        <label for="edit-nombre_insumo" class="form-label">Nombre Insumo</label>
                        <input type="text" class="form-control" id="edit-nombre_insumo" name="nombre_insumo">
                    </div>
                    <div class="mb-3">
                        <label for="edit-marca" class="form-label">Marca</label>
                        <input type="text" class="form-control" id="edit-marca" name="marca">
                    </div>
                    <div class="mb-3">
                        <label for="edit-tipo" class="form-label">Tipo</label>
                        <input type="text" class="form-control" id="edit-tipo" name="tipo">
                    </div>
                    <div class="mb-3">
                        <label for="edit-valor_unidad" class="form-label">Valor Unidad Insumo</label>
                        <input type="text" class="form-control" id="edit-valor_unidad" name="valor_unidad">
                    </div>
                    <div class="mb-3">
                        <label for="edit-cantidad" class="form-label">Cantidad</label>
                        <input type="text" class="form-control" id="edit-cantidad" name="cantidad">
                    </div>
                    <div class="mb-3">
                        <label for="edit-total" class="form-label">Total De Insumo</label>
                        <input type="text" class="form-control" id="edit-total" name="total">
                    </div>
                    <div class="mb-3">
                        <label for="edit-proveedor" class="form-label">Proveedor</label>
                        <input type="text" class="form-control" id="edit-proveedor" name="proveedor">
                    </div>
                    <div class="mb-3">
                        <label for="edit-disponibilidad" class="form-label">Disponibilidad</label>
                        <input type="text" class="form-control" id="edit-disponibilidad" name="disponibilidad">
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
                                    <h5 class="modal-title" id="editarLabel">Confirmar Eliminación Insumo</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>¿Estas seguro que desea Eliminar este Insumo?</p>
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
                document.getElementById('formEditar').action = `/admin/insumos/${id}`;
                document.getElementById('edit-id').value = id;
                document.getElementById('edit-fecha_registro').value = this.getAttribute('data-fecha_registro');
                document.getElementById('edit-nombre_insumo').value = this.getAttribute('data-nombre_insumo');
                document.getElementById('edit-marca').value = this.getAttribute('data-marca');
                document.getElementById('edit-tipo').value = this.getAttribute('data-tipo');
                document.getElementById('edit-valor_unidad').value = this.getAttribute('data-valor_unidad');
                document.getElementById('edit-cantidad').value = this.getAttribute('data-cantidad');
                document.getElementById('edit-total').value = this.getAttribute('data-total');
                document.getElementById('edit-proveedor').value = this.getAttribute('data-proveedor');
                document.getElementById('edit-disponibilidad').value = this.getAttribute('data-disponibilidad');
            });
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        document.querySelectorAll('.deletebtn').forEach(button =>{
            button.addEventListener('click',function(){
                const id = this.getAttribute('data-id');
                document.getElementById('formEliminar').action = `/admin/insumos/${id}`;
            });
        });
    });
</script>
@endsection