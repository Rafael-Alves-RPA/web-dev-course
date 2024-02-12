<?php

// PARÂMETROS DE UMA FUNÇÃO

// como forçar os strict types?
declare(strict_types=1);

// function multiplicar1($a, $b): string {
//     return $a * $b;
// }

function multiplicar($a, $b): int|float {
    return $a * $b;
}

echo multiplicar(10.3,2);