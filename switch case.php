<?php

$cor = "cinza";
switch ($cor):
case "vermelho":
    echo "sua cor preferida é o vermelho";
    break;
    case "verde":
    echo "sua cor preferida é o verde";
    break;
    case "azul":
    echo "sua cor preferida é o azul!";
    default:
    echo "sua cor preferida não é vermelho, verde ou azul!";
endswitch;