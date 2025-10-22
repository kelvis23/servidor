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
    echo $cat ->miaw()
    ?>
</body>
</html>