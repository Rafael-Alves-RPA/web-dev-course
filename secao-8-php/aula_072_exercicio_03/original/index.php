<?php

// criar a função aqui ...
function divide($valor1, $valor2)
{
    try {
        return $valor1 / $valor2;
    } catch (Throwable $th) {
        return null;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Nível 1 - Exercício 02</title>
</head>

<body>

    <?php for ($i = 0; $i <= 20; $i++) : ?>

        <?php
        $valor1 = rand(0, 10);
        $valor2 = rand(0, 10);
        $resultado = divide($valor1, $valor2);
        ?>

        <!-- apresentar os valores aqui -->
        <p><?= "$valor1 / $valor2 = " . ($resultado === null ? "Divisão por 0" : $resultado) ?></p>

    <?php endfor; ?>


</body>

</html>