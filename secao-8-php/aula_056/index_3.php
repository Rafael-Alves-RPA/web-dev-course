<?php

/* 
Podemos usar o fopen / fclose para ler ou escrever
*/

// escrever num ficheiro
$file = fopen('novo1.txt', 'w'); // r - leitura | w - escrita | a - append
for($i = 1; $i <=1000; $i++){
    fputs($file, "3 x $i = " . (3 * $i) . PHP_EOL);
    // fwrite() é um alias de fputs
}
fclose($file);