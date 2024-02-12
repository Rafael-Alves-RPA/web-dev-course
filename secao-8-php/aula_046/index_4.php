<?php

// ESCOPO DE VARIÁVEIS

/* 
É possível aceder dentro de uma função a uma variável global.
Fazemos da seguinte forma:
*/

$nome = 'joao';

function dados(){
    global $nome;
    $nome = 'joaquim';
}

dados();

echo $nome;

// IMPORTANTE: A melhor estratégia passa por usar parâmetros nas funções.