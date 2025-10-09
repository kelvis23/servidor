<?php
function showName(){
    echo"Kelvis";
    
}
echo"<br>";
$variable = "hola";

//imprime la suma de dos numeros 
function printAddition($a,$b){
echo$a+$b;
}
/**
 * realisa la suma de los numeros enteros o double
 * @param int|float $a primer operador
 * @param int|float $b Segundo operador
 * @return int|float  El resultado 
 */
function addition($a,$b):int|float{
return $a+$b;
}

//funsion para saludar que puede recivir solamente el nombre (muestra "hola $nombre")
// o el mombre y el tipo de saludar (muestra $saludo $nombre)
//pulic static String saludar (String nombre){return "hola"+nombre}
//pulic static String saludar (String nombre, String saludo){return saludo+ ""+nombre}
//Esto s java se conoce como sobrescritura de funciones y en php no existe

//oho oarametro con valor por defecto
function salute($name,$salute = " hola"):string{
    return$salute ." ". $name;
}



/** 
 * Devuelve como string lo que le digamos como parametro  dentro de las etiquetas que indiquemos (p si no indicamos nada)
 * @param string $tag etiquetas en las envolver el elmento si no se indica ninguna  que sea <p>por defecto</p>
 * @param string $element cadena de texto a envolver entre las tags html
 * @return string con el elemento rodeado de los tags indicados 
*/
function intoHem( $element , $tag = "p"):string{

return "<$tag> $element</$tag>";
}

function matricula($stude,$school,$course= "DaW" ,$year="2025"){
    return"<p>$stude matriculado en $course, en $year, en el ies $school</p>";
}
function incrementOne($num){
    $num++ ;
    return $num;
}


function substract( ...$number ){
$result =0;
foreach($number as $n){
$result += $n;
}
return $result;
}
/**
 * conextar las cadenas de textos resividas como parametros
 * tiene que haber al menos 2, y si no devolver false $text
 * @param array $text cadenas de texto de concatenar
 * @return string cadena
 */
function concat( ...$text ){
    if(count($text) < 0){
        return false;
    }
$result = "";
foreach($text as $t){
    $result .= $t;
}
return $result;
}

?>