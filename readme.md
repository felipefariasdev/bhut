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

######<?php
// Exemplo de Utilização do pacote

// Execute o comando no console: $ php run.php

require 'vendor/autoload.php';

use bhut\Multiplos;

#______ V1 BHUT Multiplo de 3#

$ate_valor_maximo = 100;

$valor_multiplo = 3;

$multiplos = new Multiplos();
$return = $multiplos->multiploV1($valor_multiplo,$ate_valor_maximo);

echo "Imprimir multiplos de {$valor_multiplo} até o valor {$ate_valor_maximo}: \n \n";


echo "Resultado: \n \n";

echo "Qtd de multiplos de {$valor_multiplo}: " . count($return) ."\n \n";

print_r($return);


#______ V2 IT Multiplo de 5#

$valor_multiplo = 5;

$multiplos = new Multiplos();
$return = $multiplos->multiploV2(5,$ate_valor_maximo);

echo "Imprimir multiplos de ($valor_multiplo) até o valor ($ate_valor_maximo): \n \n";

echo "Resultado: \n \n";

echo "Qtd de multiplos de ($valor_multiplo): " . count($return) ."\n \n";

print_r($return);


#______ BHUT IT Multiplo de 3 e 5#

$valor_multiplo1 = 3;
$valor_multiplo2 = 5;

$multiplos = new Multiplos();
$return = $multiplos->multiploV1V2($valor_multiplo1,$valor_multiplo2,$ate_valor_maximo);

echo "Imprimir multiplos de ($valor_multiplo1 e $valor_multiplo2) até o valor ($ate_valor_maximo): \n \n";

echo "Resultado: \n \n";

echo "Qtd de multiplos de ($valor_multiplo1 e $valor_multiplo2): " . count($return) ."\n \n";

print_r($return);
