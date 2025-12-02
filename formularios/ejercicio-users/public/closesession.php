<?php
//Cierra sesión y redirige a signup.
session_start();
session_destroy();
header( "Location: form-login.php");
//borrar las cookis
setcookie("stay-connected","", time()-3600 ,"/");