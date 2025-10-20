<?php
// Array que contiene los datos de los estudiantes
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

// Función que calcula la mejor nota por cada materia y quién la obtuvo
function mejor_nota_por_materia($school)
{
    $mejores_notas = [];

    foreach ($school as $id => $estudiante) {
        foreach ($estudiante as $materia => $nota) {
              // Ignoramos 'nombre' y 'clase', solo nos interesan las materias
            if ($materia !== 'nombre' && $materia !== 'clase') {
                 // Si no existe todavía esta materia en $mejores_notas
                // o la nota actual es mayor que la almacenada, actualizamo
                if (!isset($mejores_notas[$materia]) || $nota > $mejores_notas[$materia]['nota']) {
                    $mejores_notas[$materia] = [
                        'nota' => $nota,
                        'nombre' => $estudiante['nombre']
                    ];
                }
            }
        }
    }
        return $mejores_notas;
}


// Función que calcula qué estudiante tiene la peor media por cada clase
function peor_media_por_clase($school)
{
     // Inicializamos array con las clases y asignamos un valor muy alto a la peor media para poder comparar
   $peores = [
        'letras' => [
            'nombre' => '',
            'promedio' => INF // INF representa infinito, para que cualquier nota sea menor
        ],
        'ciencia' => [
            'nombre' => '',
            'promedio' => INF
        ]
    ];

    foreach ($school as $estudiante) {
        $suma = 0;
        $count = 0;

        foreach ($estudiante as $materia => $valor) {
                 // Ignoramos 'nombre' y 'clase'
            if (!in_array($materia, ['nombre', 'clase'])) {
                $suma += $valor;
                $count++;
            }
        }

        if ($count > 0) {
            $media = round($suma / $count, 2);
            $clase = $estudiante['clase'];
              // Si la media actual es menor que la peor media registrada en esa cla
            if ($media < $peores[$clase]['promedio']) {
                 // Actualizamos el peor promedio y el nombre del estudiante
                $peores[$clase]['promedio'] = $media;
                $peores[$clase]['nombre'] = $estudiante['nombre'];
            }
        }
    }

    return $peores;
}



?>

