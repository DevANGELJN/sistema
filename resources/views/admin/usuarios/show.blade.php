@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">Datos del usuario</h3>
                </div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <p>{{ $usuario->name }}</p>
                                @error('name')
                                    <script>
                                        Swal.fire({
                                            icon: "error",
                                            title: "Error encontrado",
                                            text: "{{ $message }}"
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
                                <p>{{ $usuario->email }}</p>
                                @error('email')
                                    <script>
                                        Swal.fire({
                                            icon: "error",
                                            title: "Error encontrado",
                                            text: "{{ $message }}"
                                        });
                                    </script>
                                @enderror
                            </div>
                        </div>
                    </div>                   
                    
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ url('/admin/usuarios') }}" class="btn btn-secondary">
                                <i class="bi bi-caret-left-fill"></i>
                                Volver
                            </a>                            
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection
