<?php
//haz una funcion que recibba dos numeros y
//  devuelve true si son multiplos  o false si no lo
//  son y devuelve null si uno de los dos es negativo

function numeros($num1, $num2){
    if($num2 % $num1 ==0){
        return true;
    }elseif ($num1 <=0 || $num2 <=0){
        return null;
    }else{
        return false;
    }
}
var_dump(numeros(5,25));
var_dump(numeros(2,15));
var_dump(numeros(-2,1));

//haz una funcion que reciva entre 1 y n argumentos
//  1.una cadena de text w a n letras devuelve 
// 1 si todas las letras estan en 
// cadena 0 o si  alguna 
// deals o -1 si no esta niguna
echo"<br>";
function cadena($text){
    $letras=[ "w","a","n"];
    $sum = 0;
    foreach($letras as $l){
        $sum+= substr_count($text,$l);
        
    }
    if($sum ==3){
            return 1;
        }else if($sum ==2 || $sum ==1){
            return 0;
        }else{
            return -1;
        }

}
echo cadena("hola");
echo"<br>";
echo cadena("wenselao");
echo"<br>";
echo cadena("metes");

//crean un array bideiminsional indeedo de 10 filas y 10 columbnas 
//  muestralo   en una tabla de manera que 
// las celdas de las diagramas tenga fondo rojo y
//  la central azul 
// ( con clases puedes utilisar styly en ontro documento)

for($i=0 ;$i <10;$i++){
    $array=[];
    for($j=0 ;$j <10;$j++){
        $array[$j][$i] = "x";

        
    }
}

?>