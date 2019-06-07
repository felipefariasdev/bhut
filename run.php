<?php
// Exemplo de Utilização do pacote

// Execute o comando no console: $ php run.php

require 'vendor/autoload.php';

use bhut\Multiplos;

$multiplos = new Multiplos();
$return = $multiplos->run(3,5,100);

echo "Imprimir multiplos de {três} && {cinco} && {três e cinco} até o valor 100: \n \n";


echo "Resultado: \n \n";
print_r($return);

