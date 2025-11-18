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
        <label for="password">Contraseña</label>
        <input type="password" name="pass" id="password" minlength="5">
        <br>
        <label for="passwordr">Repetir Contraseña</label>
        <input type="passwordr" name="pass" id="passwordr" minlength="5">
        <br>
        <label for="gmail">Gmail:</label>
        <input type="text" name="gmail" id="gmail">
        <br>
        <label for="year">Año</label>
        <input type="int" name="year" id="year">
        <br>
        <p>Curso</p>
        <input type="radio" id="DAW" name="gender" value="DAW">
        <label for="DAW">DAW</label>
        <input type="radio" id="DAM" name="gender" value="DAM">
        <label for="DAM">DAM</label>
        <input type="radio" id="ASIR" name="gender" value="ASIR" >
        <label for="ASIR">ASIR</label>
  
        <br>
        <input type="submit" value="Enviar datos">


    </form>
</body>

</html>