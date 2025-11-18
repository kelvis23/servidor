<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>
</head>
<body>
    <p>En esta página:</p>
        <ol>
           <li>Se comprueba que ha llegado a través de POST</li> 
           <li>Se instancia un objeto User</li> 
           <li>Se muestra el user creado(toString)</li> 
        </ol>

        

      <?php 
      include $_SERVER["DOCUMENT_ROOT"] ."/signup";
      if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $name =$_POST['name'];
        $pass =$_POST['pass'];
        $pass2 =$_POST['pass2'];
        $age = $_POST['age'];
        $studies =  $_POST['studies'];
        $u = new User($name, $pass,$email,$age,$studies);
        echo "<p>$u</p>";
      }else{
        echo"<p>No puedes estar aqui</p>";
      }
      ?>
</body>
</html>