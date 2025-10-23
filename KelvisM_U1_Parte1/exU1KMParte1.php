<?php
include "./modeloA.php";
echo"<p>Ejegercicio1 </p>";
echo "<ol>";

foreach($employees as  $info){
    if($info["department"] == 'Sales'){
        echo"<li>$info[name] -$info[salary]</li>";
    }
}
echo"</ol>";

echo"<p>Ejegercicio2 </p>";

 $min = 0;
foreach($employees as  $info){
   
    if ($info["salary"] > $min){
        $min = $info["salary"];
    }
    echo "El salario minimo en $info[department] es $min ";
}

echo"<p>Ejegercicio3 </p>";
echo "<ul>";
foreach($employees as $id=> $info){
   
    if($info["department"] == 'IT'){
         asort($info);
        echo "<li>$info[name]</li>";
    }
    
}
 echo"</ul>";
?>