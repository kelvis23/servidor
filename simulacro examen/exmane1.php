<?php
//include (wquivalente al import de java para añdir otros ficheros)
include("./funcionesXY.php");



//1
  for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 5; $j++) {
            $bid[$i][$j] = ($i + 1) * ($j + 1);
        }
    }
    for ($i = 0; $i < count($bid); $i++) {
        for ($j = 0; $j < count($bid[$i]); $j++) {
            echo $bid[$i][$j] . " ";
        }
        echo "<br>";
    }
    echo "<br>";
//2
  
    for ($i = 0; $i < 4; $i++) {
        for ($j = 0; $j < 4; $j++) {
            if ($i == $j)
                $bid2[$i][$j] = "sí";
            else
                $bid2[$i][$j] = "no";
        }
    }
    for ($i = 0; $i < count($bid2); $i++) {
        for ($j = 0; $j < count($bid2[$i]); $j++) {
            echo $bid2[$i][$j] . " ";
        }
        echo "<br>";
    }

//3
echo "<br>";
 var_dump(promedio(1, 2, 4, 3));
 var_dump(promedio());
 var_dump(promedio(-2, 3, -7));

//4
echo "<br>";

  var_dump(potencia(4, 3));
    var_dump(potencia(4));
    var_dump(potencia(2, 8));
//5
 $array =[
        14 => "blanca",
        21 =>"Amed",
         41 => "juan,"
    ];

  asort($array);
    echo "<ul>";
    foreach ($array as $id => $name) {
        echo "<li>$name tiene el id $id</li>";
    }
    echo "</ul>";

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


