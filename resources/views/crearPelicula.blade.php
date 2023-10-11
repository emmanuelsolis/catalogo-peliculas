<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="crear">Crear Pelicula</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('post.store')}}" method="POST" align="center" enctype="multipart/form-data">
                @csrf
                <div class="modal-body align-content-center">
                    <label for="title" class="mb-3">
                        Title:
                        <input type="text" name="title">
                    </label><br>
                    <label for="year" class="mb-3">
                        Year:
                        <input type="text" name="year">
                    </label><br>
                    <label for="synopsis" class="mb-3">
                        Sinopsis:
                        <textarea name="synopsis"></textarea>
                    </label><br>
                    <label for="cover" class="mb-3">
                        Cover:
                        <input type="file" name="cover">
                    </label><br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>