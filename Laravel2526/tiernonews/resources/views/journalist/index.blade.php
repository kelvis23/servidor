<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <title>Journalists</title>
</head>

<body>
    @include("components.header")

    <div class="container mt-4">

        <h2 class="mb-4 text-center">Journalists</h2>

        @if (session('deleted'))
            <div class="alert alert-success text-center">
                {{ session('deleted') }}
            </div>
        @endif

        <div class="row">
            @foreach ($journalists as $j)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $j->name }} {{ $j->surname }}
                            </h5>

                            <p class="card-text">
                                <strong>Email:</strong> {{ $j->email }}
                            </p>
                        </div>

                        <div class="card-footer d-flex justify-content-between">
                            <a href="{{ route('journalist.edit', $j->id) }}"
                               class="btn btn-primary btn-sm">
                                Editar
                            </a>

                            <form method="POST"
                                  action="{{ route('journalist.destroy', $j->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="btn btn-danger btn-sm"
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

