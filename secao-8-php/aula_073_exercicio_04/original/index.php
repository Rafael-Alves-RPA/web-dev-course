<?php

$erro = '';
$sucesso = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['something'])) {
        $erro = "Campo vazio.";
    } else {
        $valor = $_POST['something'];
        if (is_numeric($valor)) {
            $file = fopen('dado_num.txt', 'a');
            fputs($file, $valor . PHP_EOL);
            fclose($file);
            $sucesso = "Valor Númerico guardado.";
        } else {
            $file = fopen('dado_string.txt', 'a');
            fputs($file, $valor . PHP_EOL);
            fclose($file);
            $sucesso = "Valor string guardado.";
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Nível 1 - Exercício 04</title>
</head>

<body>

    <form action="index.php" method="post">
        <label for="dumyText">Text or Number</label>
        <input type="text" name="something" id="dumyText">
        <button type="submit">Enviar</button>
    </form>

    <div>
        <?= !empty($erro) ? $erro : $sucesso ?>
    </div>

</body>

</html>