<?php

//number_format = formata o valor 
// round arredonda o valor quebrado
//ceil = arredonda somente para cima
//floor = arredonda somente para baixo
// rand = sorteia aleatóriamente os valores.
$db = 1234.56;
$preco = number_format($db,2,",",".");

echo "o valor do produto é R$ $preco";
echo "<hr>";

echo round(3.5);
echo "<br>";
echo ceil(5.1);
echo "<br>";
echo floor(5.99);
echo "<br>";
echo rand (1,29);