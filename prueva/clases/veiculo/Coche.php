<?php
class Coche extends Vehiculo{
    private int $combustible;
}
/*
Crea una clase base Vehículo con las siguientes características:

Propiedades protegidas (protected): marca, modelo, velocidad (inicializa la velocidad a 0).

Métodos:

acelerar($cantidad) para aumentar la velocidad.

frenar($cantidad) para disminuir la velocidad (sin que sea menor que 0).

getVelocidad() para obtener la velocidad actual.

__toString() que devuelva una descripción del vehículo (marca, modelo y velocidad).

Crea una subclase Coche que herede de Vehículo, y añade:

Propiedad privada (private) combustible (en litros).

Constructor que reciba marca, modelo y combustible, y llame al constructor del padre para inicializar marca y modelo.

Método recargar($litros) para aumentar el combustible.

Sobrescribe el método acelerar($cantidad) para que además de modificar la velocidad, consuma combustible (por ejemplo, cada 10 unidades de velocidad que aumentes consume 1 litro de combustible).

Método mostrarCombustible() que imprima cuánto combustible tiene.

Crea otra subclase Camion (también hereda de Vehículo), con:

Propiedad protegida cargaMaxima (en kg).

Propiedad protegida cargaActual (inicialmente 0).

Constructor que reciba marca, modelo y cargaMaxima, y llame al constructor padre.

Método cargar($peso) que aumente la carga actual, pero sin pasarse de la carga máxima.

Método descargar($peso) para reducir la carga actual (hasta un mínimo de 0).

Sobrescribe frenar($cantidad) para que además de frenar, reduzca la carga actual un poco (simulando que parte de la carga se asienta). Por ejemplo, al frenar 20 unidades de velocidad, la carga se reduce un 1% o algo así.

Crea un script donde:

Instancias un objeto Coche con un combustible inicial.

Instancias un objeto Camion con una carga máxima.

Realices algunas operaciones: acelerar, frenar, recargar combustible, cargar y descargar el camión.

Muestres por pantalla el estado (velocidad, combustible o carga) de cada vehículo usando __toString() y los métodos específicos.
*/ 
?>