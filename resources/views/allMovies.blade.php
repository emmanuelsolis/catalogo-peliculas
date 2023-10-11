@extends('home')

@section('content')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <br><br>
        <h2>Lista de Películas </h2>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
            Nueva
        </button>
        <br><br>
        <div class="table-responsive">
            <table class="table">
                <thead class="bg-dark text-white">
                    <tr>
                        <th scope="col">Portada</th>
                        <th scope="col">Título</th>
                        <th scope="col">Año</th>
                        <th scope="col">Sinopsis</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($movies as $movie)
                    <tr class="fila_peli">
                        <td><img src="{{$movie->cover}}" alt="imagen" class="card-img"></td>
                        <td><strong> {{$movie->title}}</strong></td>
                        <td>{{$movie->year}}</td>
                        <td>{{$movie->synopsis}}</td>
                        <td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$movie->id}}">Editar</button></td>
                        <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$movie->id}}"><box-icon name='trash'></box-icon></button></td>
                    </tr>
                    @include('editMovie')
                    @endforeach

                </tbody>
            </table>
        </div>
        @include('crearPelicula')
    </div>
    <div class="col-md-2"></div>
</div>

@endsection