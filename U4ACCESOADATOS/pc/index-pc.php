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
    require_once $_SERVER["DOCUMENT_ROOT"]."/pc/UserDAO.php";
    $pc = new Pc("asu100" ,"amdrea","Asus",1364.1);
    $c1 =new Componet("ssd","samsung","58H");
    $c2 =new Componet("ssd","samsung","58H");
    $c3 =new Componet("ssd","samsung","58H");
    $pc->addComponent($c1);
    $pc->addComponent($c2);
    $pc->addComponent($c3);
    //PcDAO::create($pc);
    $u = new User("sete","admin123");
    $u2 = new User("diego","a");

    //guardamos los user en la db 
    //UserDAO::create($u);
    //UserDAO::create($u2);
   var_dump( UserDAO::verifyPassword("asdf","asdf"));
   var_dump( UserDAO::verifyPassword("sete","asdf"));
   var_dump( UserDAO::verifyPassword("sete","admin123"));

   if(PcDAO::create($pc)){
    echo "se ha creado ";
   }else{
    echo "no se ha creado ";
   }
    ?>
</body>
</html>