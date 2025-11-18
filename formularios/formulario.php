<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- get y post  -->
    <form action="landig.php" method="post">
        <label for="name">Nombre</label>
        <input type="text" placeholder='Nombre...' name="name" id="name">
        <br>
        <label for="password">Contraseña</label>
        <input type="password" name="pass" id="password" minlength="5">
        <br>
        <label for="termines">Acepto los terminos</label>
        <input type="checkbox" name="termines" value="true" id="termines">
        <br>
        <label for="subjects">Asignatura</label>
        <select id="subjects" name="subjects">
            <option value="DWES">desarrollo web entorno servidor</option>
            <option value="DWEC">desarrollo web entorno cliente</option>
            <option value="Desp">despliegue</option>
        </select>
        <br>
        <input type="radio" id="man" name="gender" value="man">
        <label for="man">Hombre</label>
        <br>
        <input type="radio" id="woman" name="gender" value="woman">
        <label for="woman">Muger</label>
        <br>
        <input type="radio" id="otro" name="gender" value="otro" >
        <label for="otro">Otro</label>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>