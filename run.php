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

