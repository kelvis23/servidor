<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <title>Articles</title>
</head>

<body>
    @include("components.headerArticle")

    <div class="container mt-4">

        <h2 class="mb-4 text-center">Articles</h2>

        @if (session('deleted'))
            <div class="alert alert-success text-center">
                {{ session('deleted') }}
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            @foreach ($articles as $a)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $a->title }}
                            </h5>

                            <p class="card-text">
                                {{ $a->content }}
                            </p>
                        </div>

                        <div class="card-footer d-flex justify-content-between">
                            <a href="{{ route('article.edit', $a->id) }}" class="btn btn-primary btn-sm">
                                Editar
                            </a>

                            <form method="POST" action="{{ route('article.destroy', $a->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('¿Seguro que quieres eliminar?')">
                                    Eliminar
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>

    </div>
</body>

</html>
