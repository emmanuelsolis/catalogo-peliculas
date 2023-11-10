<!-- Modal -->
<div class="modal fade" id="edit{{$movie->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="edit">Actualizar datos de la Pelicula</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('home.updateMovie', $movie->id)}}" method="POST" align="center" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="modal-body align-content-center">
                    <label for="title" class="mb-3">
                        Title:
                        <input type="text" name="title" value="{{$movie->title}}">
                    </label><br>
                    <label for="year" class="mb-3">
                        Year:
                        <input type="text" name="year" value="{{$movie->year}}">
                    </label><br>
                    <label for="synopsis" class="mb-3">
                        Sinopsis:
                        <textarea name="synopsis" value="{{$movie->synopsis}}"></textarea>
                    </label><br>
                    <label for="cover" class="mb-3">
                        Cover:
                        <input type="file" name="cover" value="{{$movie->cover}}">
                    </label><br>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="delete{{$movie->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="crear">Eliminar Pelicula</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('home.destroy', $movie->id)}}" method="POST" align="center" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <div class="modal-body align-content-center">
                   Estas seguro de eliminar la pelicula "<strong>{{$movie->title}}</strong>?"?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>