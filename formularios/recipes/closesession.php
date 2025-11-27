<?php
//Cerrar sesion
session_start(); //Para destruir sesión también tengo que iniciarla
session_destroy(); 
header("Location formrecipe.php");


//borro cookies
setcookie("receta","",time()-36009);