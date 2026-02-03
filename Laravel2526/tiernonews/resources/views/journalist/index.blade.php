<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>journalists</title>

</head>

<body>
    @include("components.header")
    <div class="cotainer">
        <div class="row">

            <!-- esto tiene bootstrap ademas  el journalists detro del foreact peretence al index de journalist controles  -->
            <!-- mejorar pr que se ve feo  -->
            <!-- 
             <h2>journalists</h2>
            <p class="bg-info">estos son las y los periodistas de mi BD</p> 
            -->
            @if (session('deleted'))
                <div class="alert alert-success" role="alert">
                    {{ session('deleted') }}
                </div>
            @endif
            @foreach ($journalists as $j)
                <div class="card" style="width: 18rem">
                    <p>Nombre :{{ $j->name }}</p>
                    <p>Apellidos :{{ $j->surname }}</p>
                    <p>Email:{{ $j->email }}</p>
                    <p>Contraseña :{{ $j->password }}</p>

                    <div class="container">
                        <div class="row">
                            <a href="{{ route('journalist.edit', $j->id)}} ">
                                <button type="submit" class="btn btn-primary">
                                    Editar
                                </button>
                            </a>
                            <form method="post" action="{{ route('journalist.destroy', $j->id) }}">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger">
                                    eliminar
                                </button>
                            </form>
                        </div>
                    </div>
                    <!--  crear dos botos eliminar y editar  , es en una cart trabajando con bostrap    -->
            @endforeach
            </div>
        </div>

</body>

</html>