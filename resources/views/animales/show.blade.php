@extends('layouts.master')

@section('titulo')
    Zoológico
@endsection

@section("contenido")
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-1">
                <div class="mt-5 divImagen">
                    <div class="card-body">
                        <img class="card-img-top img-fluid" src="{{asset('storage/img/'.$animal->imagen)}}">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3 mt-5 text-dark">
                    @if ($animal->alimentacion == 'carnívoro')
                        <div class="card-body border border-danger">
                            <h4 class="card-title text-center text-danger">{{$animal->especie}}</h4>
                            <ul class="list-group list-group-flush text-dark">
                                <li class="list-group-item">Alimentacion: {{$animal->alimentacion}}</li>
                                <li class="list-group-item">Peso: {{$animal->peso}}kg</li>
                                <li class="list-group-item">Altura: {{$animal->altura}}cm</li>
                            </ul>
                            <h5 class="card-title">Descripción</h5>
                            <p class="card-text">{{$animal->descripcion}}</p>
                            <a href="{{route('animales.index')}}" class="btn btn-primary">Inicio</a>
                            <a href="{{route('animales.edit', $animal->id)}}" class="btn btn-dark">Editar</a>
                        </div>
                    @else
                        <div class="card-body border border-success">
                            <h4 class="card-title text-center text-success">{{$animal->especie}}</h4>
                            <ul class="list-group list-group-flush text-dark">
                                <li class="list-group-item">Alimentacion: {{$animal->alimentacion}}</li>
                                <li class="list-group-item">Peso: {{$animal->peso}}kg</li>
                                <li class="list-group-item">Altura: {{$animal->altura}}cm</li>
                            </ul>
                            <h5 class="card-title">Descripción</h5>
                            <p class="card-text">{{$animal->descripcion}}</p>
                            <a href="{{route('animales.index')}}" class="btn btn-primary">Inicio</a>
                            <a href="{{route('animales.edit', $animal->id)}}" class="btn btn-dark">Editar</a>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

@endsection
