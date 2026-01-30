<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>journalists</title>
  
</head>
<body>
    @include("components.header")
<!-- esto tiene bootstrap ademas  el journalists detro del foreact peretence al index de journalist controles  -->
    <h2>journalists</h2>
    <p class="bg-info">estos son las y los periodistas de mi BD</p>
    @foreach ($journalists as $j )
    <div style="background-color:lightblue;">
    <p>Nombre :{{ $j->name }}</p>
    <p>Apellidos :{{ $j->surname }}</p>
    <p>Email:{{ $j->email }}</p>
    <p>Contraseña :{{ $j->password }}</p>
    </div>
    
    @endforeach
</body>
</html>