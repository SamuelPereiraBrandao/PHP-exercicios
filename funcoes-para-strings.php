<?php
//funcoes
//strtoupper - converte em letras maiusculas
//strtolower - converte em letras minusculas
//substr - consegue pegar apenas uma parte da frase.
// str_pad — Preenche uma string para um certo tamanho com outra string
$nome = "SAMUEL PEREIRA";
$novoNome = strtolower($nome);
echo $novoNome;
echo "<hr>";

$mensagem = "Olá pessoal!";
echo substr($mensagem,0,8);
echo "<hr>";

$objeto = "mouse";
$novoObejeto = str_pad($objeto,11,"*",STR_PAD_BOTH); //left right e both
echo $novoObejeto;