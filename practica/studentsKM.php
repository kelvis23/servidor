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
        return $mejores_notas;
}



function peor_media_por_clase($school)
{
   $peores = [
        'letras' => [
            'nombre' => '',
            'promedio' => INF
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
            if (!in_array($materia, ['nombre', 'clase'])) {
                $suma += $valor;
                $count++;
            }
        }

        if ($count > 0) {
            $media = round($suma / $count, 2);
            $clase = $estudiante['clase'];

            if ($media < $peores[$clase]['promedio']) {
                $peores[$clase]['promedio'] = $media;
                $peores[$clase]['nombre'] = $estudiante['nombre'];
            }
        }
    }

    return $peores;
}



?>

