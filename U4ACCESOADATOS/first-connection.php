<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // phpinfo();
    
    $host = "127.0.0.1"; //localhost
    $user = "root";
    $pass = "Sandia4you";
    $db = "shop";
    $port = 3306;
    //conectamos:
    $conn = new mysqli($host, $user, $pass, $db, $port);

    //creamos una tabla
    $sql = "CREATE TABLE IF NOT EXISTS trees(
    id int AUTO_INCREMENT PRIMARY KEY, 
     price float not null,
     height float,
     material varchar(255) 
    );";
    try {
        $conn->query($sql);
    } catch (Exception $e) {
        echo "<p>Exception:{$e->getMessage()}</p>";
    }


    //inseramos un arbol
    $sql = "INSERT INTO trees(price,height,material) VALUE (1,1.50,'plastic');";
    // $conn->query($sql);
    $id = $conn->insert_id;
    echo "<p>El arbol se ha insertado con id $id.</p>";

    //DELETE
    $sql = "DELETE FROM trees WHERE id = 4";
    //$conn->query($sql);
    $filasAfectadas = $conn->affected_rows;
    echo "<p> se an eliminado $filasAfectadas filas .</p>";

    //UPDATE
    $sql = "UPDATE trees SET 
    material = 'iron'
    WHERE id = 9 ";
    $conn->query($sql);
    $filasAfectadas = $conn->affected_rows;
    echo "<p> se an actualizado $filasAfectadas filas .</p>";


    //SELECT
    $sql = "SELECT * FROM trees where material = 'iron'";
    $result = $conn->query($sql);
    $cant = $result->num_rows; //numero de resultados del select
    echo "ha habido $cant resultado";
    $fila = $result->fetch_assoc(); // fila contiene un arra asocia tivo con la primera fila
    //fetch_assoc debuelve nuul cuando no hay mas resultado 
    while ($fila != null) {
        //imprime resultado
        echo "<p>{$fila['id']} - {$fila['price']} - {$fila['height']}- {$fila['material']}</p>";
        //cojo la siguinte fila 
        $fila = $result->fetch_assoc();
    }

    echo "<hr>";

    //SELCET con bucle abrebiado
    $sql = "SELECT * FROM trees where material = 'iron'";
    $result = $conn->query($sql);
    while (($fila = $result->fetch_assoc()) != null) {
        echo "<p>{$fila['id']} - {$fila['price']} - {$fila['height']}- {$fila['material']}</p>";
    }

//cre objeto arbol y lo inserto
include $_SERVER('DOCUMENT_ROOT') ."/first-connection.php"


    ?>
</body>

</html>