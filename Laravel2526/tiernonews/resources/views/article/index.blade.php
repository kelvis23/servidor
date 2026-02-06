<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

    <title>Document</title>
</head>

<body>
    @include("components.headerArticle")
    <h1>hola mundo</h1>

    @foreach ($articles as $a)
        <h5 class="card-title">
            {{ $a->title }}
        </h5>
    @endforeach
    <div>
        <label for="title">Título</label>

    </div>

    <div>
        <label for="content">Contenido</label>
        <textarea name="content" id="content" rows="5" required>{{ old('content') }}</textarea>
    </div>

    <div>
        <label for="readers">Lectores</label>
        <input type="number" name="readers" id="readers" value="{{ old('readers', 0) }}" min="0">
    </div>

    <button type="submit">Guardar</button>
    </form>

</body>

</html>