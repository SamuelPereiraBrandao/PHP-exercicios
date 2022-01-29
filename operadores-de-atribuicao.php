<?php

$a = 10;
$b = 5;
$a += $b; // $a = $a + b 
$b *= $a;
echo $a;
echo "<br>";
echo $b;
echo "<br>";

//operadores de comparação
if (10 !== 11):
    echo "Positivo";
else:
    echo "Negativo";
endif;
//
// == comparação
// != diferente de
// === identico em todos sentidos
// !=== não é identico
// <> diferente de
// < menor que
// > maior que
// <= menor ou igual que
// >= maior ou igual que
// <=> 
echo "<br>";
var_dump(20 <=> 20); // se o lado esquerdo for menor, ele retorna -1 se for o lado direito retorna 1 e se for igual retorna 0.
