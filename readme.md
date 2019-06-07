# Desafio - BackEnd

Usando os princípios do SOLID, escreva um programa que print todos os números de 1 até 100. Porém, quando for múltiplos de 3, print “BHUT”, se for múltiplo de 5 print “IT” e se for multiplo de 3 e 5, print “BHUT IT”


Mas aqui está o desafio: você pode usar apenas um IF. Nenhum switch, operadores ternários ou `ELSE`.

# Requisitos

* Princípios do SOLID

* 1 IF

* Você não pode usar `ELSE`, `ELSE IF` ou ternário.

* Testes unitários

$ git clone https://github.com/felipefariasdev/bhut.git

$ cd bhut

$ composer install

$ vendor/bin/phpunit

# Para adicionar a dependencia ao seu projeto utilize o comando

$ composer require felipefariasdev/bhut:dev-master

# Link packagist

https://packagist.org/packages/felipefariasdev/bhut


Criar o arquivo run.php com o seguinte código:

<?php
// Exemplo de Utilização do pacote

// Execute o comando no console: $ php run.php

require 'vendor/autoload.php';

use bhut\Multiplos;

$multiplos = new Multiplos();
$return = $multiplos->run(3,5,100);

echo "Multiplos de três e cinco até o valor 100: \n \n";

echo ("Quantidade repetidos: ".$return["qtdMtiplosRepetidos"]."\n \n");

print_r($return['multiplosRepetidos']);

echo "Resultado final: \n \n";
print_r($return['results']);
