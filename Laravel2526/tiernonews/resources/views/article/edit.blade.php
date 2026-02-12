<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a new article</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    @include("components.header")
    <!--Formulario de creación de journalist:
        - título
        - content
        - readers
        - periodistas (select con todos los periodistas)
    -->

    <div class="container">
        <div class="row">
            <h2>Artículo nuevo</h2>
            <div class="col">
                <form action="{{ route('article.update', $article->id) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group mb-3">
                        <label for="title">Título</label>
                        <input type="text" name="title" id="title"
                            class="form-control @error('title') is-invalid @enderror"
                            value="{{ old('title', $article->title) }}">
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="content">Contenido</label>
                        <textarea name="content" id="content"
                            class="form-control @error('content') is-invalid @enderror">{{ old('content', $article->content) }}</textarea>
                        @error('content')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="readers">Readers</label>
                        <input type="number" name="readers" id="readers"
                            class="form-control @error('readers') is-invalid @enderror"
                            value="{{ old('readers', $article->readers) }}">
                        @error('readers')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Mostramos periodista, pero no editable -->
                    <div class="form-group mb-3">
                        <p>Periodista: {{ $article->journalist->name }}</p>
                        <input type="hidden" name="journalist_id" value="{{ $article->journalist_id }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>

            </div>
        </div>
    </div>
</body>

</html>