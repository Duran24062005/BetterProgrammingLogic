<?php 
# Ejercicio 2: Fibonacci
# Descripción: Genera la secuencia de Fibonacci hasta un número n dado.
# Lenguajes: JavaScript, C++, C#, Python
# Puntos Clave:

# Uso de recursión y/o iteración.
# Manejo de series y secuencias.
fibonacci(10);

    function fibonacci($n) {
        $a = 0;
        $b = 1;

        for ($i=0; $i < $n; $i++) {
            # code...
            echo $a . " ";
            $c = $a + $b;
            $a = $b;
            $b = $c;
        }

    }
?>