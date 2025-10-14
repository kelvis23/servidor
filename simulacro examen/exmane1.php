<?php
//include (wquivalente al import de java para añdir otros ficheros)
include("./funcionesXY.php");



//1
$array = [];
echo "<table border = 1>";
echo "<tr>";
for ($i = 1; $i <= 3; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 5; $j++) {
        echo "<td>";
        echo $num = $i * $j;
        $array[] = $num;
        echo "</td>";

    }
    echo "</tr>";
}
var_dump($array);
echo "<br>";
//2
$arr1 = [];
for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= 4; $j++) {
        if ($i == $j) {
            $arr1[] = "si";
        } else {
            $arr1[] = "no";
        }
    }
}
var_dump($arr1);

//3
echo "<br>";
echo promedio(7, 10);

//4
echo "<br>";
echo potencia(4, 3);
echo "<br>";
echo potencia(4);
echo "<br>";
echo potencia(2, 8);


//5
 $array =[
        "balca"=>41,
        21 =>"Amed",
         41 => "juan,"
    ];
    echo"<ul>";
foreach ($array as $name => $value) {    
  asort($value);
  echo"<li>$value tiene el id $key </li></li>" ;
}
echo"</ul>";

//6


$alumnado = [
    "1234W" => [
        "name" => "Amir",
        "edad" => 21,
        "matricula" => true
    ],
    "2345X" => [
        "name" => "Laura",
        "edad" => 17,
        "matricula" => false
    ],
    "3456Y" => [
        "name" => "Juan",
        "edad" => 23,
        "matricula" => true
    ],
    "4567Z" => [
        "name" => "Martin",
        "edad" => 12,
        "matricula" => false
    ]
];

//a
foreach ($alumnado as $dn => $valor) {
    if ($dn == "2345X") {
        echo "<p> la edad es $valor[edad]</p>";
    }
}
//b
echo"<ol> ";
foreach ($alumnado as $dn => $valor) {
    $matricula =$valor["matricula"] ? "si" :"no";
  
    echo" <li>$valor[name] $matricula tiene matricula</li>";
}
echo"</ol> ";
echo"<ul> ";
foreach ($alumnado as $dn => $valor) {
 if($valor["edad"] >=18) {
 echo"<li>$valor[name] tine $valor[edad] años y su dni es $dn </li>";
}
}
echo"</ul> ";

//test  1-d 2-d
?>



