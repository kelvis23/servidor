<?php
$productos = [
    'prod1' => [
        'nombre' => 'portátil gaming',
        'precio' => 899.99,
        'stock' => 15,
        'categoria' => 'electrónica'
    ],
    'prod2' => [
        'nombre' => 'mesa escritorio',
        'precio' => 120.50,
        'stock' => 8,
        'categoria' => 'hogar'
    ],
    'prod3' => [
        'nombre' => 'ratón inalámbrico',
        'precio' => 25.99,
        'stock' => 0,
        'categoria' => 'electrónica'
    ]
];

$productosConDescuento = [
    'prod1' => [
        'nombre' => 'portátil gaming',
        'precio' => 899.99,
        'stock' => 15,
        'categoria' => 'electrónica',
        'descuento' => 10  
    ],
    'prod2' => [
        'nombre' => 'mesa escritorio',
        'precio' => 120.50,
        'stock' => 8,
        'categoria' => 'hogar'
    ],
    'prod3' => [
        'nombre' => 'ratón inalámbrico',
        'precio' => 25.99,
        'stock' => 0,
        'categoria' => 'electrónica',
        'descuento' => 5  
    ]
];

function formatPrice($precio) {
    return number_format($precio, 2, ',') . ' €';
}
/*
$precioProducto = $productos['prod1']['precio'];
echo formatPrice($precioProducto);  */
function calculateIVA($precio, $iva = 21)
{
    $ivaAmount = $precio * ($iva / 100);
    return $total = $precio + $ivaAmount;
}
/*
$precioProducto = $productos['prod1']['precio'];
echo calculateIVA($precioProducto); */

 function  getStock( $productos){
    $array = [];

     foreach ($productos as $key => $producto) {
        if ($producto['stock'] > 0) {
            $array[$key] = $producto;
        }
    }

    return $array;
}
/*
$productosConStock = getStock($productos);
print_r($productosConStock);  */
 
?>