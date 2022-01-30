<?php
//str_repeat - repete a mensagem
//strlen - retorna o numero da string
// str_replace - substitui uma palavra no texto
//strpos - retorna posição de uma palavra em um texto
$string = str_repeat("Sucesso <br>",5);
echo $string;
echo "<hr>";

$mensagem = "Olá pessoal";
echo strlen($mensagem);
echo "<hr>";

$texto = "A seleção Argentina será campeã da copa do mundo de 2021!";
$novoTexto = str_replace("Argentina","Brasileira",$texto);
echo $novoTexto;
echo "<hr>";

echo strpos($texto,"copa");
