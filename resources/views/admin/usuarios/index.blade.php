@extends('layouts.admin')

@section('content')
    <div class="row mt-20">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Usuarios</h2>
                    <div class="card-tools">
                        <div class="card-tools">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <i class="far nav-icon"><i class="bi bi-person-fill-add"></i></i>
                                Agregar Usuario
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <x-modal-add></x-modal-add>

                <div class="card-body table-responsive p-0">
                    <table class="table table-striped table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>
                                    <center>Acciones</center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $contador = 0;
                            @endphp
                            @foreach ($usuarios as $usuario)
                                @php
                                    $contador++;
                                    $id =$usuario->id;
                                @endphp
                                <tr>
                                    <td>{{ $contador }}</td>
                                    <td>{{ $usuario->name }}</td>
                                    <td>{{ $usuario->email }}</td>
                                    <td class="action-icon">
                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                            {{-- Eliminar --}}
                                            <form action="{{ route('usuarios.destroy', $usuario->id) }}" id="miFormulario<?=$id;?>" method="post" onclick="preguntar<?=$id;?>(event)">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                    style="border-radius: 0px 5px 5px 0px">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                            <script>
                                                function preguntar<?=$id;?>(event){
                                                    event.preventDefault();
                                                    Swal.fire({
                                                    title: "Eliminar Registro",
                                                    text: "¿Desea eliminar este registro?",
                                                    icon: "warning",
                                                    showCancelButton: true,
                                                    confirmButtonColor: "#3085d6",
                                                    cancelButtonColor: "#d33",
                                                    cancelButtonText: "Cancelar",
                                                    confirmButtonText: "Eliminar"
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        var form = $('#miFormulario<?=$id;?>');
                                                        form.submit();
                                                    }
                                                });
                                                }                                                
                                            </script>

                                            {{-- Editar --}}
                                            <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-warning">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            {{-- Visualizar --}}
                                            <a href="{{ route('usuarios.show', $usuario->id) }}" class="btn btn-info">
                                                <i class="bi bi-eye"></i>
                                            </a>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $usuarios->onEachSide(2)->links() }}
                </div>

            </div>

        </div>
    </div>
@endsection
