<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clases</title>
</head>
<body>
    <h3>clases : Animales</h3>
    <?php
    include "./Cat.php";
    $cat = new Cat("mario", "naranja",9);
    echo $cat ->miaw();
    include "./Minotauro.php";
    $min1 = new Minotauro("abdelrraman");
    $min2 = new Minotauro("manolo" ,15);
    echo"<p>la edad del".$min1->getName()."es".$min1->getAge()."</p>";
    echo"<p>la edad del".$min2->getName()."es".$min2->getAge()."</p>";



    
    ?>
</body>
</html>