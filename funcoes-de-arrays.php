<?php

/// Is_array
$nomes = array("Samuel","Felipe","Maria","Jose");
var_dump(is_array($nomes));
if(is_array($nomes)):
    echo "é um array";
else:
    echo "Não é um array";
endif;

// in_array
$nome = array("Samuell","Feh","Mah","Jos");
echo in_array("carlos",$nome);  //retorna 1 para verdadeiro e 0 para falso, no caso de não haver o nome na array selecionada.
echo "<br> <hr>";
if(in_array("Feh", $nome)):
    echo "Existe no array";
else:
    echo "Não existe no array";
endif;
echo"<br>";

////////// array_keys
$nobes = array("Primo"=>"Sam","Vizinho"=>"carlos","Namorada"=>"luiza");
$keys = array_keys($nobes);
print_r($keys);
echo "<br> <hr>";

////////// array_values
$values = array_values($nomes);
print_r($values);
echo "<br> <hr>";
////////// array_merge 
$carros = array("camaro","uno","gol","fiesta","ferrari");
$motos = array("pop100","50cc","cb1000");
$veiculos = array_merge($carros,$motos);
print_r($veiculos);
echo "<br> <hr>";

////////// array_pop exclui a ultima posição do array
print_r($carros);
echo "<br>";
array_pop($carros);
print_r($carros);
 //////////// array_shift exclui a primeira posição do array
 echo "<br> <hr>";
 print_r($carros);
echo "<br>";
array_shift($carros);
print_r($carros);
echo "<br> <hr>";
///////////// array_unshift
$frutas = array("Maça","Pera","Uva");
print_r($frutas);
echo "<br>";
array_unshift($frutas,"Manga","Acerola","Morango");
print_r($frutas);

echo "<br> <hr>";

/////////////// array_push adiciona no final do array
$frutas = array("Maça","Pera","Uva");
print_r($frutas);
echo "<br>";
array_push($frutas,"Manga","Acerola","Morango");
print_r($frutas);
echo "<br> <hr>";

/////////////////// array_combine combina os indices com os valores
$keys = array("campeão","vice","terceiro lugar");
$values = array("vasco","flamengo","botafogo");
$times = array_combine($keys,$values);
print_r($times);
echo "<br> <hr>";

///////////// array_sum() soma os valores dentro do array!
$soma = array(1,5,3,6,81,2,5125,1215,125);
echo array_sum($soma);
echo "<br> <hr>";

//////////// explode
$data = "17/08/2000";
$novadata = explode('/',$data);
print_r($novadata);
echo "<br> <hr>";
$frase = "meu nome não é francisco!";
$separador = explode(" ",$frase);
print_r($separador);
echo "</br> <hr>";

/////////////// implode
$nomes = array("Samuel","Thalita","Matheus","Larrisa");
$string = implode(", ",$nomes);
print_r($string);