<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <title>USer</title>
</head>

<body>

    <div class="container mt-4">
    @include("controler.header")

        <h2 class="mb-4 text-center">User</h2>
        
         @if (session('deleted'))
            <div class="alert alert-success text-center">
                {{ session('deleted') }}
            </div>
        @endif
        <div class="row">
            @foreach ($user as $u)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{ $u->name }} {{ $u->surname }}
                                </h5>

                                <p class="card-text">
                                    <strong>Email:</strong> {{ $u->email }}
                                </p>
                                <p class="card-text">
                                    <strong>Año:</strong> {{ $u->age }}
                                </p>
                                <p class="card-text">
                                    <strong>numeros de eventos :</strong>  {{  $u->events}} 
                                </p>
                            </div>
                            <form method="POST" action="{{ route('destroy', $u->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('¿Seguro que quieres eliminar?')">
                                    Eliminar
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
        </div>

    </div>
</body>