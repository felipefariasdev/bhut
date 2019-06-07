<?php
// Exemplo de Utilização do pacote

// Execute o comando no console: $ php run_v1.php

require 'vendor/autoload.php';

use bhut\Multiplos;

$valor_multiplo = 3;
$ate_valor_maximo = 100;
$multiplos = new Multiplos();
$return = $multiplos->multiploV1($valor_multiplo,$ate_valor_maximo);

echo "Imprimir multiplos de {$valor_multiplo} até o valor {$ate_valor_maximo}: \n \n";


echo "Resultado: \n \n";

echo "Qtd de multiplos de {$valor_multiplo}: " . count($return) ."\n \n";

print_r($return);
