<?php
$school = [
    "xxx" => [
        "nombre" => "cesar",
        "clase" => "ciencia",
        "matematica" => 7,
        "historia" => 8,
        "lengua" => 6,
        "quimica" => 5
    ],
    "x1x" => [
        "nombre" => "andrea",
        "clase" => "letras",
        "matematica" => 6,
        "historia" => 7,
        "lengua" => 9,
        "arte" => 8
    ],
    "abc" => [
        "nombre" => "juan",
        "clase" => "ciencia",
        "matematica" => 8,
        "historia" => 5,
        "lengua" => 4,
        "quimica" => 3
    ],
    "def" => [
        "nombre" => "maria",
        "clase" => "ciencia",
        "matematica" => 7,
        "historia" => 6,
        "lengua" => 5,
        "quimica" => 4
    ],
    "ghi" => [
        "nombre" => "pedro",
        "clase" => "letras",
        "matematica" => 8,
        "historia" => 9,
        "lengua" => 6,
        "arte" => 7
    ],
    "jkl" => [
        "nombre" => "lucia",
        "clase" => "letras",
        "matematica" => 1,
        "historia" => 9,
        "lengua" => 8,
        "arte" => 10
    ]
];


function promedio_estudiante($school)
{
    $sum = 0;
    $cantidad = 0;
    foreach ($school as $id => $estudiante) {
        foreach ($estudiante as $materia => $nota) {
            if ($materia !== 'nombre' && $materia !== 'clase') {
                $sum += $nota;
                $cantidad++;
            }

        }
           if ($cantidad > 0) {
         $promedio = $sum / $cantidad; 
           }
          echo "El promedio de notas de " . $estudiante['nombre'] . " es: " . $promedio . "<br>";
    }
   
}

promedio_estudiante($school);

function mejor_nota_por_materia($school)
{
    $mejores_notas = [];

    foreach ($school as $id => $estudiante) {
        foreach ($estudiante as $materia => $nota) {
            if ($materia !== 'nombre' && $materia !== 'clase') {
                if (!isset($mejores_notas[$materia]) || $nota > $mejores_notas[$materia]['nota']) {
                    $mejores_notas[$materia] = [
                        'nota' => $nota,
                        'nombre' => $estudiante['nombre']
                    ];
                }
            }
        }
    }

    // Mostrar los resultados
    foreach ($mejores_notas as $materia => $info) {
        echo "La mejor nota en " . $materia . " es: " . $info['nota'] . " obtenida por " . $info['nombre'] . "<br>";
    }
}

// Llamamos la función
mejor_nota_por_materia($school);

function peor_media_por_clase($school)
{
    $peor_promedio_letras =INF;
    $nombre_peor_estudiante_letras = '';
    
    $peor_promedio_ciencia = INF;
    $nombre_peor_estudiante_ciencia = '';

    foreach ($school as $id => $estudiante) {
        // Calcular el promedio del estudiante
        $sum = 0;
        $cantidad = 0;
        foreach ($estudiante as $materia => $nota) {
            if ($materia !== 'nombre' && $materia !== 'clase') {
                $sum += $nota;
                $cantidad++;
            }
        }

        $promedio = $sum / $cantidad;

        // Verificar si es de la clase de letras
        if ($estudiante['clase'] == 'letras') {
            if ( $promedio < $peor_promedio_letras) {
                $peor_promedio_letras = $promedio;
                $nombre_peor_estudiante_letras = $estudiante['nombre'];
            }
        }

        // Verificar si es de la clase de ciencia
        if ($estudiante['clase'] == 'ciencia') {
            if ( $promedio < $peor_promedio_ciencia) {
                $peor_promedio_ciencia = $promedio;
                $nombre_peor_estudiante_ciencia = $estudiante['nombre'];
            }
        }
    }

    // Imprimir los resultados
    echo "El peor promedio de la clase de letras es de " . $nombre_peor_estudiante_letras . " con un promedio de " . $peor_promedio_letras . "<br>";
    echo "El peor promedio de la clase de ciencia es de " . $nombre_peor_estudiante_ciencia . " con un promedio de " . $peor_promedio_ciencia . "<br>";
}

// Llamamos la función
peor_media_por_clase($school);

?>

