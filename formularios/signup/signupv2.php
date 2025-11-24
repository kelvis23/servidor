<?php
session_start();


//hago las comprobasiones del formu lario

//solo se va meter en este if si llega con una oetecion post 
//es decir , despues de hacer clic en el boton del formulario post
// echo "hola";
$name = $email = $pass = "";
$age = 0;
$studies = [];
$passError = "";
function secure($text){
    //quien espacio de delante y detras 
   $text= trim($text);

   //escapar caracteres especiales 
 //  $text= stripslashes($text);
   //caracteres especiales 
 // $text = htmlspecialchars($text);
  $text = htmlspecialchars(stripcslashes(trim($text)));
  return $text;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = secure( $_POST['name']);
    $email =secure( $_POST['email']);
    $pass =secure( $_POST['pass']);
    $pass2 =secure( $_POST['pass2']);
    $age =secure( $_POST['age']);
    if (isset($_POST['studies'])) {
        $studies = $_POST['studies'];
    }

    if ($pass != $pass2) {
        $errors = true;
        $passError = "Las contraseña no coinsiden";
    } else {
        //guardamos los datos que quiero pasar
        $_SESSION["name"] = $name;
        $_SESSION["email"] = $email;
        $_SESSION["pass"] = $pass;
        $_SESSION["age"] = $age;
        $_SESSION["studies"] = $studies;
        //le puedo meter otra informacion
        $_SESSION["origin"] ="signup";
        header("Location: ../indexv2.php");
        //exit(); //con esto termina el script , no se ejecuta nada mas 
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<style>
    .error {
        color: red;
        font-size: 0.5em;
    }
</style>

<body>
    <p>Formulario de registro. Al pulsar el botón enviar, se va al index.</p>


    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="<?= $name ?>">
        <br>
        <label for="pass">Contraseña</label>
        <input type="password" name="pass" id="pass" minlength="5">
        <br>
        <label for="pass2">Repetir Contraseña</label>
        <input type="password" name="pass2" id="pass2" minlength="5">
        <br>
        <p class="error"><?= $passError ?></p>

        <label for="email">Gmail:</label>
        <input type="text" name="email" id="email" value="<?= $email ?>">
        <br>
        <label for="age">Año</label>
        <input type="int" name="age" id="age" value="<?= $age ?>">
        <br>
        <p>Curso</p>
        <input type="checkbox" id="daw" name="studies[]" value="daw"
        <?php
        if (in_array("daw", $studies)) {
            echo "checked";
        }
        ?>
        >
        <label for="DAW">DAW</label>

        <input type="checkbox" id="dam" name="studies[]" value="dam" <?= in_array("dam", $studies) ? "checked" : ""; ?>>
        <label for="DAM">DAM</label>

        <input type="checkbox" id="asir" name="studies[]" value="asir" <?= in_array("dam", $studies) ? "checked" : ""; ?>>
        <label for="ASIR">ASIR</label>

        <br>
        <input type="submit" value="Enviar datos">

        

    </form>
</body>

</html>