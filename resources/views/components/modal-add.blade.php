<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-header-icon">
                    <i class="bi bi-people add-edit"></i>
                </div>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ url('/admin/usuarios') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input name="name" value="{{ old('name') }}" type="text"
                                    class="form-control text-capitalize" required>
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
                                <input name="email" value="{{ old('email') }}" type="email" class="form-control"
                                    required>
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
                            <div class="form-group">
                                <label for="">Contraseña</label>
                                <input name="password" type="password" class="form-control" required>
                                @error('password')
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
                                <label for="">Confirmar contraseña</label>
                                <input name="password_confirmation" type="password" class="form-control">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-floppy-fill"></i>
                                Registrar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
