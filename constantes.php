<?php
//constantes
define("NOME","Samuel Pereira");
define("IDADE",21);
define("ALTURA",1.80);
define("KASADO",false);
var_dump(KASADO);
echo 'Meu nome é '.NOME.' e minha idade é de '.IDADE.' anos, minha altura é de:'.ALTURA.' m!';


define("TIMES", ['vasco','flamengo','corinthians','palmeiras']);
echo " <hr> <br>";
echo TIMES[0];
echo " <hr> <br>";
var_dump(TIMES);

echo " <hr> <br>";
function exibenome(){
    echo NOME;
}
exibenome();