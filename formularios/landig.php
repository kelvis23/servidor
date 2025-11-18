<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>estoy en landing</p>
    <?php
      var_dump($_GET);
      var_dump($_POST);
    ?>
    <?php if ($_SERVER['REQUEST_METHOD'] == "GET"){ ?> 
        <p>He llegado atraves de una peticion post</p>
        <p> El  nombre es: <?php echo$_GET["name"]?></p>
         <!-- esto ?= $_GET["pass"] es igual a ?php echo$_GET["name"] -->
        <p> La  contraseña es: <?= $_GET["pass"]?></p>
    <?php } ?>



      <?php if ($_SERVER['REQUEST_METHOD'] == "POST"): ?> 
        <p>He llegado atraves de una peticion post</p>
        <p> El  nombre es: <?php echo$_POST["name"]?></p>
         <!-- esto ?= $_GET["pass"] es igual a ?php echo$_GET["name"] -->
        <p> La  contraseña es: <?= $_POST["pass"]?></p>
      <!-- Antes de acceder a $_POST["gender"]  tengo que ver si existe : isset  -->
      <?php if(isset($_POST["gender"])):?>
         <p>Tu genero es:  <?= $_POST["gender"]?> </p>
        <?php else: ?>  
         <p>No has elegido nigun genero</p>
       <?php endif  ?>
    <?php endif ?>
</body>

</html>