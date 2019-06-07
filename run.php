<?php
// Exemplo de Utilização do pacote

// Execute o comando no console: $ php run.php

require 'vendor/autoload.php';

use bhut\Multiplos;

#__________________________________ V1 BHUT Multiplo de 3#

$ate_valor_maximo = 100;

$valor_multiplo = 3;

$multiplos = new Multiplos();
$return = $multiplos->multiploV1($valor_multiplo,$ate_valor_maximo);

echo "Imprimir multiplos de {$valor_multiplo} até o valor {$ate_valor_maximo}: \n \n";


echo "Resultado: \n \n";

echo "Qtd de multiplos de {$valor_multiplo}: " . count($return) ."\n \n";

print_r($return);


#__________________________________ V2 IT Multiplo de 5#

$valor_multiplo = 5;

$multiplos = new Multiplos();
$return = $multiplos->multiploV2(5,$ate_valor_maximo);

echo "Imprimir multiplos de ($valor_multiplo) até o valor ($ate_valor_maximo): \n \n";

echo "Resultado: \n \n";

echo "Qtd de multiplos de ($valor_multiplo): " . count($return) ."\n \n";

print_r($return);


#__________________________________ BHUT IT Multiplo de 3 e 5#

$valor_multiplo1 = 3;
$valor_multiplo2 = 5;

$multiplos = new Multiplos();
$return = $multiplos->multiploV1V2($valor_multiplo1,$valor_multiplo2,$ate_valor_maximo);

echo "Imprimir multiplos de ($valor_multiplo1 e $valor_multiplo2) até o valor ($ate_valor_maximo): \n \n";

echo "Resultado: \n \n";

echo "Qtd de multiplos de ($valor_multiplo1 e $valor_multiplo2): " . count($return) ."\n \n";

print_r($return);