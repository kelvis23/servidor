<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include("components.header")

    <p>Nombre: {{ $journalist->name }}</p>
    <p>Apellidos: {{ $journalist->surname }}</p>
    <p>Email: {{ $journalist->email }}</p>
    <p>Contraseña: {{ $journalist->password }}</p>

        <h3>{{ $journalist->name }} ha escrito {{ sizeof($journalist->articles) }} artículos</h3>
    <ul>
    @foreach ($journalist->articles as $article)
        <li>{{ $article->title }} - {{ $article->content }} - {{ $article->readers }}
            (Escrito por: {{ $article->journalist->name }})
        </li>

    @endforeach
    </ul>

    
</body>
</html>