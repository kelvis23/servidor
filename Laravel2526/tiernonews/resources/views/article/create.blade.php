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
                <form action="{{ route('article.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">Título</label>
                        <input name="title" type="text" id="title" placeholder="Enter title"
                            class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
                        @error('title') <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Contenido</label>
                        <textarea name="content" type="text" class="form-control" id="content"
                            placeholder="Enter content" value="{{ old('content') }}">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="readers">readers</label>
                        <input name="readers" type="number" class="form-control" id="email" placeholder="Enter readers"
                            value="{{ old('readers') }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="journalist_id">Periodista</label>
                        <select name="journalist_id" id="journalist_id" class="form-control">
                            @foreach($journalists as $journalist)
                                <option value="{{ $journalist->id }}">
                                    {{ $journalist->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>



        </div>
    </div>
</body>

</html>