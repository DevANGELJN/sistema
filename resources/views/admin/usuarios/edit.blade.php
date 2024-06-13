@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3>Actualizar Datos</h3>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/admin/usuarios',$usuario->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Nombre</label>
                                    <input name="name" value="{{ $usuario->name }}" type="text" class="form-control text-capitalize" required>
                                    @error('name')
                                        <script>
                                            Swal.fire({
                                                icon: "error",
                                                title: "Error encontrado",
                                                text: "{{$message}}"                                                
                                            });
                                        </script>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Correo</label>
                                    <input name="email" value="{{ $usuario->email }}" type="email" class="form-control" required>
                                    @error('email')
                                        <script>
                                            Swal.fire({
                                                icon: "error",
                                                title: "Error encontrado",
                                                text: "{{$message}}"                                            
                                            });
                                        </script>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Contraseña</label>
                                    <input name="password" type="password" class="form-control" required>
                                    @error('password')
                                        <script>
                                            Swal.fire({
                                                icon: "error",
                                                title: "Error encontrado",
                                                text: "{{$message}}"                                                
                                            });
                                        </script>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Confirmar contraseña</label>
                                    <input name="password_confirmation" type="password" class="form-control">                                    
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{ url('/admin/usuarios') }}" class="btn btn-danger">
                                    <i class="bi bi-x-circle-fill"></i>
                                    Cancelar
                                </a>
                                <button type="submit" class="btn btn-success">
                                    <i class="bi bi-pen-fill"></i>
                                    Editar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection
