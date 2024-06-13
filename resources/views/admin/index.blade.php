@extends('layouts.admin')

@section('content')
    <h1>Admin</h1>
    <hr>
    <div class="col">
        <div class="row">
            <div class="col-lg-3 col-6">

                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>
                        <p>Bounce Rate</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        @php
                            $contador_usuarios = 0;
                        @endphp

                        @foreach ($usuarios as $usuario)
                            @php
                                $contador_usuarios++;
                            @endphp
                        @endforeach
                        <h3 style="color: white">{{ $contador_usuarios }}</h3>
                        <p style="color: white">Usuarios registrados</p>
                    </div>

                    <a style="cursor: pointer;" class="icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fas fa-user-plus" style="color: rgba(0,0,0,.15)"></i>
                    </a>
                    <!-- Modal -->
                    <x-modal-add></x-modal-add>

                    <a href="{{ url('/admin/usuarios') }}" class="small-box-footer">
                        <span style="color: white"> Mas informacion <i class="fas fa-arrow-circle-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
