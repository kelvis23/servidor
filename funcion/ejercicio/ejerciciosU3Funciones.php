<?php 


echo"<h2> ejercicio 1</h2>";
function  imprimeMayor($num , $num1){
    if($num >$num1){
         echo"$num es mayor que $num1";
    }else{
          echo"$num1 es mayor que $num";
    }
}
imprimeMayor(7,4);
echo"<br>";
imprimeMayor(5,10);

echo"<h2> ejercicio 2</h2>";
function  mayor($num , $num1){
    
    if($num >$num1){
        return $num;
    }else{
        return $num1;
    }
}
echo mayor(5,6);
echo"<br>";
echo mayor(18,13);

echo"<h2> ejercicio 3</h2>";
function  esMayor($a , $b){
    
    if($a > $b){
        return true;
    }else{
        return false;
    }
}
var_dump( esMayor(7,12));
echo"<br>";
var_dump( esMayor(34,15));

echo"<h2> ejercicio 4</h2>";

function  cuentaCaracteres($text){
    //la función strlen(), que cuenta la longitud de una cadena, incluyendo espacios
  $num =strlen($text);
  return $num;
}
var_dump(cuentaCaracteres("hola como estas"));

echo"<h2> ejercicio 5</h2>";

function  cuentaVocales($text){
    //caracteres que puede contar
     $vocales = ['a', 'e', 'i', 'o', 'u',];
    $num =0;
     foreach ($vocales as $v) {
        // decimos que vusque en el texto los caracteres de v y si los en cuentra le sume un 1 al num
        $num += substr_count($text, $v);
    }

    return $num;

}
var_dump(cuentaVocales("hola"));

echo"<h2> ejercicio 6</h2>";

function aumentaODisminuye($num ,$boolean){
    if($boolean == true){
        return $num+1;
    }else{
        return $num-1;
    }
}
var_dump(aumentaODisminuye(17,true));
var_dump(aumentaODisminuye(5,false));

echo"<h2> ejercicio 7</h2>";

function esPar($num){
    if($num %2==0 ){
        return true;
    }else{
      return false;
    }
}

var_dump(esPar(8));
var_dump(esPar(7));

echo"<h2> ejercicio 8</h2>";
function arrayAletatorio($num , $min ,$max){
    $arr1 =[];
    for($i=0;$i < $num;$i++){
        $arr1[] = random_int($min,$max);
    }
  return $arr1;
}
$p = arrayAletatorio(5,2,10);
foreach ($p as $x) {
    echo $x ."\n" ;
}

echo"<h2> ejercicio 9</h2>";
function arrayPares($array){
    $arr1 =[];
    for($i=0;$i <count($array);$i++)
     if($array[$i] %2==0 ){
         $arr1[] = $array[$i];
     }
  return $arr1;
}
$num=[8,1,3,2,4,5,6,7,9];
$pares = arrayPares($num);
foreach ($pares as $x) {
    echo $x ."\n" ;
}

echo"<h2> ejercicio 10</h2>";
function digito($num){
$n =strlen($num);
return $n;
}
var_dump(digito(100));


echo"<h2> ejercicio 11</h2>";
function dolarAEuros($d){
    $c =$d*0.90;
    return $c;

}
function eurosADolar($c){
    $d =$c *1.10;
    return $d;
}

var_dump(dolarAEuros(100));
echo"<br>";
var_dump(eurosADolar(100));

echo"<h2> ejercicio 11</h2>";
function  modifica(&$numero , $cantidad){
    for ($i=0;$i<$cantidad;$i++){
        $numero++;
    }
}
$num =2;
 modifica($num,4);
//Sí se modifica el valor de la variable que se pasa como primer parámetro porque se pasa por referencia
//Por lo tanto, los cambios dentro de la función afectan directamente a la variable original fuera de ella.


?>