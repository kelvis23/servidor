<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Arrays indexados</h3>
    <?php
    $age = array(25, 19, 42);
    echo "<p>en la posicion 0 esta el bnumero $age[0]</p>";
    echo "<p>en la posicion 1 esta el bnumero $age[1]</p>";
    echo "<p>en la posicion 0 esta el bnumero $age[0]</p>";
    echo "<p>en la posicion 2 esta el bnumero $age[2]</p>";

    //para saver la longitud : count ($ages)
    echo "<p>Numero de elementos de la array" . count($age) . "</p>";

    //otra forma
    $names[0] = "juan";
    $names[1] = "lucia";
    //para añadir al fianl basta con poner []
    $name[] = "luz";

    //tecorer;
    for ($i = 0; $i < count($names); $i++) {

        "<P>$i ---->.$names [$i].</p>";
    }
    //2. foreach : foreach($array as $balube)
    foreach ($name as $name) // java for :names)
        echo "<P> NAME</P>";
    $ages = 50;/// esto puefi  hart  pero  hay que tener  CUIDADO AL RECOGERLO 
    // EN N RELIDAD LO que hecho es convertido en un array asociado
    
   /* $size = count($age);
    var_dump($size);
    for ($i = 0; $i < count(); $i++) {
        echo "<p>$age;</p>";
    } */
    ?>

    <h3> ARRAYS Aasociados</h3>
    <?php

    $tudente = array(
        "123W" => "JAVI",
        "3545" => "Luz",
        "9870" => "alverto"
    );
    //quiero acceder el nobre luz;
    
    var_dump($tudente["3545"]);

    //Añado un nuebo elemto
    $studente["456Y"] = "maria";
    var_dump($studente);
    $studente["123W"] = "juan"; /// modificar valor
    var_dump($studente);

    $school = array(
        "DWS" => "sete",
        "DWEC" => "diego",
        "diw" => "marco",
        "ipe" => "santi"
    );
    echo "<p>Profesor:</p>";

    // un array asociativo solo lo puedo recorrer con foreach,
    // porque no tengo indice 0,1,2,3,4
    /*for($i=0; $i<count(schoool);$i++{
    echo $school[$i]
    }*/
    foreach ($school as $teache) {
        echo "<p>$teache</p>";
    }
    echo "<p>profes y asignaturas:</p>";
    foreach ($school as $subject => $teache) {
        echo "<p>$teache imparte $subject </p>";
    }


    $futbol = array(
        "Manchester City" => "Pep Guardiola",
        "Real Madrid" => "Carlo Ancelotti",
        "FC Barcelona" => "Xavi Hernández",
        "MAnchezter_unit" => "Erik ten Hag"
    );
    foreach ($futbol as $entrenador => $entrenador) {
        echo"<p>$entrenador</p>";
    }
    foreach ($futbol as $equipo => $entrenador){
        echo"<p>$entrenador  entrena en el $equipo</p>";
    }

    ?>

    <h3>ordenar Arrays</h3>
    <?php
    $personajes = ["amador","visente", "maite", "javier"];
    //ordenar de mayor a menor
    sort( $personajes);
    var_dump($personajes);
    echo"<br>";
//ordenar de menor a mayor
    rsort( $personajes);
    var_dump($personajes);
    echo"<br>";
    
     $school = array(
        "DWS" => "sete",
        "DWEC" => "diego",
        "diw" => "marco",
        "ipe" => "santi"
    );
    // si utiloso sort con un array asosiaticvo me cargo las claves 

          //ordenar de menor a mayor

     sort( $school);
    var_dump($school);
    echo "<br>";
    //ordenar alfaveticamente los valores mayor a menor
    ksort( $school);
    var_dump($school);
    echo "<br>";

     //ordenar alfaveticamente los valores  de menor a mayor
    krsort( $school);
    var_dump($school);
    echo "<br>";


//para buscar
if(in_array("Diego", $school)) {
    echo "si";
} else {
    echo "no";
}
echo"<br>";
//buscar si exite la clave :
// no hay un metodo especifico pero tengo atajos:
    if(in_array("DWS" ,array_keys($school))) {
        echo"si";
    }else{
        echo"no";
    }
    $keys = array_keys($school);
    //if(in_array(dews,$keys)){...}es lo mismo que la anterior

    //otra forma issset($var) --> tru si existe esta variable o false  si no esta declarada
    echo"<br>";
    if(isset($computer)){
        echo "si";
    }else{
        echo "no"; // sale no porque la variavle $computer no existe
    }
    
    // quier ver si existe la clave "ingles" del array asociativo $school utilisazndo isset
     if(isset($school["ingles"])){
        echo "si";
    }else{
        echo "no"; // sale no : la variavle $school["ingles"] no existe
    }

    ?>
</body>

</html>