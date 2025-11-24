<?php
session_start();

$name =$pass = $terms = "";
$termsError ="";
$errores = false;

if ($_SERVER['REQUEST_METHOD']== "POST"){
    include $_SERVER["DOCUMENT_ROOT"]."/utils.php";
    $name =secure($_POST["name"]);
    $pass =secure($_POST["pass"]);
  
    // var_dump($_POST);
    if(isset($_POST["terms"])){
        $terms = $_POST["terms"];
    }else{
        $errores = true;
        $termsError ="Es obligatorio aceptart los termninos";

    }

    //esto en realidad lo puedes verificar por html, con minlength = "3" maxlength="15"
    //pero tambien se podria hacer en el servidor (aunque) es por paractica
    if(strlen($name)<3 || strlen($name)>15){
        $nameError = "la longitud entre 3 y 15 ";
        $errores = true;
    }


    // si esta todo bien a index 
    //si no me quedo
    if(!$errores){
       $_SESSION["name"] = $name;
       $_SESSION["pass"] = $pass;
       $_SESSION["origin"] = "login"; //este me viene bien para saber en el index de donde vengo 
       $_SESSION["terms"] = $terms;
       $_SESSION["test"] = "hola";
       $_SESSION["test"] = "45,9"; // este no vale para nada 

       //redirijo:
       header("Location: ../indexv2.php");
       //terminos de el script
       exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../formularios.css" rel="stylesheet ">
</head>
<body>
    <form action = "<?= $_SERVER["PHP_SELF"]?>" method="post">
        <label for = "name">Nombre:</label>
        <input type="text" placeholder="Nombre..." name ="name"id="name" value = "<?=$name?>" >
        <br>
        <label for="pass" >Contraseña</label>
        <input type="password" name = "pass" id=" pass">
        <br>
        <input type="checkbox" name="terms" id="terms" value="t"
         class="<?= empty($termsError)? "" :"checkError" ?>" >
        <label for ="terms" class="<?= empty($termsError)? "" :"checkError" ?>">acento los terminos</label>
        <?= "<p class = 'error'>".$termsError ."</p>" ?>
      
        <br>
       <input type="submit" value="Enviar ">
    </form>
</body>
</html>