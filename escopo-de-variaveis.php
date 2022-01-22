<?php
//escopo global
$nome = "Samuel Pereira <br>";
function exibeNome(){
    global $nome;
    echo $nome;
}

exibeNome();

/////////////////////
function exibecidade(){
    global $cidade;
    $cidade = "Sáo Paulo <br>";
}
exibecidade();
echo $cidade;

/////////////////////////
$a = 1585;
$b = 31511;
$c = 782;

function soma(){
    echo $GLOBALS['a']+$GLOBALS['b']+$GLOBALS['c'];
}
echo "A soma entre $a + $b + $c será de: ";
soma();