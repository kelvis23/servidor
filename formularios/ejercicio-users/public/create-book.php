<?php
session_start();
//1. ver si llego por post (formulario)
$isbn = $title = $author  = "";
$type = [];
$pages =0;
$isbnError = $titleError = $authorError = "";
$errors = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //2. recojo valores securizados

    include $_SERVER['DOCUMENT_ROOT'] . "/utils/functions.php";
    $isbn = secure($_POST["isbn"]);
    $title = secure($_POST["title"]);
    $author = secure($_POST["author"]);
    $pages = ($_POST["pages"]);
   
     if(empty($pages)){
       $pages = 0;
    }   
    if(isset($_POST["type"])){
      
        
     }

    // try {
    //     $type = $_POST["type"];
    // } catch (Exception $e) {
    
    //}

    if (empty($isbn)) {
        $errors = true;
        $isbnError = "Este campo es obligatorio";
    }

    if (empty($title)) {
        $errors = true;
        $titleError = "Este campo es obligatorio";
    }
    if (empty($author)) {
        $errors = true;
        $authorError = "Este campo es obligatorio";
    }

    //3.  voy a index con sesion
    if (!$errors) {
        $_SESSION["isbn"] = $isbn;
        $_SESSION["title"] = $title;
        $_SESSION["author"] = $author;
        $_SESSION["pages"] = $pages;
        $_SESSION["type"] = $type;
        $_SESSION["origin"] = "book";

        header("Location: index.php");
    }


}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/resources/views/layouts/header.php"; ?>
    <main>

        <?php include $_SERVER["DOCUMENT_ROOT"] . "/resources/views/components/book.php"; ?>

    </main>
    <!-- Incluir footer -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/resources/views/layouts/footer.php"; ?>

</body>

</html>