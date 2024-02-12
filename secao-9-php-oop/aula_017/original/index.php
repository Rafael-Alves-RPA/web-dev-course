<?php
require_once('classNum.php');
/*
    Este é um pequeno exemplo de como a OOP permite tornar o nosso código
    mais bem organizado, mais profissional, mais estruturado.

    1. Criar uma classe (class_numero)
    2. A classe deverá ter uma propriedade privada número
    3. O construtor da classe serve para definir o número
    4. O método get_numero() serve para devolver o número
    5. O método par_ou_impar() deverá devolver 'par' ou 'impar'após analisar o número
    6. O método tabuada() deverá devolver um array com a tabuada do número até 10.
        Exmplo: 3 x 1 = 3
                3 x 2 = 6
                3 x 3 = 9
                ...
    7. O método raiz_quadrada() deverá devolver a raz quadrada do número
    8. Neste script deveremos importar a classe, criar 4 objetos a partir dela
    com os valores 5, 7, 16 e 123.
    Para cada uma dessas instâncias, deveremos apresentar:
        a) O número através de get_numero()
        b) Se é par ou impar
        c) A raiz quadrada do número
        d) A tabuada
*/

$n1 = new Numero(5);
echo "Numero = " . $n1->get_numero() . PHP_EOL;
echo "--------------------" . PHP_EOL;
echo "Par/Impar = " . $n1->par_impar() . PHP_EOL;
echo "--------------------" . PHP_EOL;
echo "Raiz = " . $n1->raiz_quadrada() . PHP_EOL;
echo "--------------------" . PHP_EOL;
print_r($n1->tabuada()) . PHP_EOL;

echo
'|------z------|' . PHP_EOL;

$n2 = new Numero(7);
echo "Numero = " . $n2->get_numero() . PHP_EOL;
echo "--------------------" . PHP_EOL;
echo "Par/Impar = " . $n2->par_impar() . PHP_EOL;
echo "--------------------" . PHP_EOL;
echo "Raiz = " . $n2->raiz_quadrada() . PHP_EOL;
echo "--------------------" . PHP_EOL;
print_r($n2->tabuada()) . PHP_EOL;

echo
'|------z------|' . PHP_EOL;

$n3 = new Numero(16);
echo "Numero = " . $n3->get_numero() . PHP_EOL;
echo "--------------------" . PHP_EOL;
echo "Par/Impar = " . $n3->par_impar() . PHP_EOL;
echo "--------------------" . PHP_EOL;
echo "Raiz = " . $n3->raiz_quadrada() . PHP_EOL;
echo "--------------------" . PHP_EOL;
print_r($n3->tabuada()) . PHP_EOL;

echo
'|------z------|' . PHP_EOL;

$n4 = new Numero(123);

echo "Numero = " . $n4->get_numero() . PHP_EOL;
echo "--------------------" . PHP_EOL;
echo "Par/Impar = " . $n4->par_impar() . PHP_EOL;
echo "--------------------" . PHP_EOL;
echo "Raiz = " . $n4->raiz_quadrada() . PHP_EOL;
echo "--------------------" . PHP_EOL;
print_r($n4->tabuada()) . PHP_EOL;

echo
'|------z------|' . PHP_EOL;
