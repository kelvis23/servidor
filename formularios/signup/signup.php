<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>

<body>
    <p>Formulario de registro. Al pulsar el botón enviar, se va al index.</p>


    <form action="index.php" method="post">
        <label for="name">Nombre:</label>
        <input type="text" placeholder='Nombre...' name="name" id="name">
        <br>
        <label for="pass">Contraseña</label>
        <input type="password" name="pass" id="pass" minlength="5">
        <br>
        <label for="pass2">Repetir Contraseña</label>
        <input type="password" name="pass2" id="pass2" minlength="5">
        <br>
        <label for="email">Gmail:</label>
        <input type="text" name="email" id="email">
        <br>
        <label for="age">Año</label>
        <input type="int" name="age" id="age">
        <br>
        <p>Curso</p>
        <input type="checkbox" id="daw" name="studies[]" value="daw">
        <label for="DAW">DAW</label>
        <input type="checkbox" id="dam" name="studies[]" value="dam">
        <label for="DAM">DAM</label>
        <input type="checkbox" id="asir" name="studies[]" value="asir">
        <label for="ASIR">ASIR</label>

        <br>
        <input type="submit" value="Enviar datos">

     <script> alert("hola");  </script>

    </form>
</body>
</html>