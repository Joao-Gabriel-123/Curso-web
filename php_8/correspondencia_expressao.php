<?php

$busca = 1;

switch($busca){ //operador de igualdade (==)
    case '1':
        $retornoSwitch = 'encontrou o texto 1';
    case 2:
        $retornoSwitch = 'encontrou o número 2';
    default:
        $retornoSwitch = 'encontrou o default';


}

echo "Resultado switch: $retornoSwitch";
echo '<br>';

$retornoMatch = match($busca){ //operador de congruência (===)
    '1' => 'encontrou o texto 1',
    2 => 'encontrou o número 2',
    3, 5, 7 => 'encontrou um dos valores 3, 5 ou 7',
    $busca > 10 => 'busca é maior que 10',
    default => 'não encontrou'

}


?>