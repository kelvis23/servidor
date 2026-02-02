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
                        <h4 class="card-title text-center mb-4">Crear Journolist</h4>
                        <form action="{{ route('journalist.update' , $journalist->id) }} " method="post">
                          @csrf
                          @method('put')
                        <!-- Nombre -->
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input name="name" type="text" class="form-control" id="nombre"  value="{{ $journalist->name }}">
                            </div>

                            <!-- Apellidos -->
                            <div class="mb-3">
                                <label for="apellidos" class="form-label">Apellidos</label>
                                <input name="surname" type="text" class="form-control" id="apellidos"  value="{{ $journalist->surname }}" >
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input name="email" type="email" class="form-control" id="email"  value="{{ $journalist->email }}" >
                            </div>

                            <!-- Contraseña -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input name="password"type="password" class="form-control" id="password" >
                            </div>

                            <!-- Repetir contraseña -->
                            <div class="mb-3">
                                <label for="password2" class="form-label">Repetir contraseña</label>
                                <input name="password2" type="password" class="form-control" id="password2" >
                            </div>

                            <!-- Botón -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
                                    actualizar
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