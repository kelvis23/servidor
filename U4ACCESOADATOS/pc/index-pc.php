<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once $_SERVER["DOCUMENT_ROOT"]."/pc/PcDAO.php";
    $pc = new Pc("asu125" ,"amdrea","Asus",1364.1);
    $c1 =new Componet("ssd","samsung","58H");
    $c2 =new Componet("ssd","samsung","58H");
    $c3 =new Componet("ssd","samsung","58H");

    $pc->addComponent($c1);
    $pc->addComponent($c2);
    $pc->addComponent($c3);
    PcDAO::create($pc)
    ?>
</body>
</html>