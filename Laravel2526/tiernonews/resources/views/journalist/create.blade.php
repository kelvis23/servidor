<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>journalists</title>

</head>

<body class="bg-light">
    @include("components.header")

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        @if($errors->any())
                            @foreach($errors->all() as $c => $error)
                                <p>{{ $c }} --- {{ $error }}</p>
                            @endforeach
                        @endif
                        <h4 class="card-title text-center mb-4">Crear Journolist</h4>
                        <form action="{{ route('journalist.store') }} " method="post">
                            @csrf
                            <!-- Nombre -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input name="name" type="text" id="name"
                                    class=" form-control  @error('name') is-invalid @enderror"
                                    value="{{ old('name') }}">
                                @error('name') <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>


                            <!-- Apellidos -->
                            <div class="mb-3">
                                <label for="apellidos" class="form-label">Apellidos</label>
                                <input name="surname" type="text" class="form-control" id="apellidos">
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input name="email" type="email" class="form-control" id="email">
                                  @error('email') <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Contraseña -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input name="password" type="password" class="form-control" id="password">
                                    @error('password') <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Repetir contraseña -->
                            <div class="mb-3">
                                <label for="password2" class="form-label">Repetir contraseña</label>
                                <input name="password_confirmation" type="password" class="form-control" id="password2">
                            </div>

                            <!-- Botón -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
                                    Crear cuenta
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>