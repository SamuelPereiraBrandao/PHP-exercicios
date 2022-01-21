<?php
// escalares
//string
$nome = "Testando a string |";
var_dump($nome); //analisa a string
if(is_string($nome)):
    echo "É uma string!";
else:
    echo "Não é uma string!";
endif;
echo "<hr>";

// int
$idade = 21;
var_dump($idade);
if(is_int($idade)):
    echo "É um número inteiro";
else:
    echo "Não é um número inteiro";
endif;
echo "<hr>";

//float 
$altura = 1.80;
var_dump($altura);
if(is_float($altura)):
    echo "É um número quebrado";
else:
    echo "Não é um número quebrado";
endif;
echo "<hr>";

//boolean 
$admin = true;
var_dump($admin);
if(is_bool($admin)):
    echo "É um booleano";
else:
    echo "Não é um booleano";
endif;
echo "<hr>";

//compostos
//array
$carros = array("Gol","Uno","Ferrari",12,20.6,true);
var_dump($carros);
if(is_array($carros)):
    echo "É um array";
else:
    echo "Não é um array";
endif;
echo "<hr>";

//object
class cliente {
    public $nome;
    public function atribuirnome($nome){
        $this->$nome = $nome;
    }
}
$cliente = new cliente();
$cliente->atribuirnome("Samuel Pereira");
var_dump($cliente);
if(is_object($cliente)):
    echo "É um objeto";
else:
    echo "Não é um objeto";
endif;
echo "<hr>";

//especiais
//null
$cidade = NULL;
var_dump($cidade);

//resource