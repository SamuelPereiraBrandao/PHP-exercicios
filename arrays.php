<?php
//arrays
$carros = array("BMW","Veloster","Hilux");
print_r($carros);
$carros[] = "Amarok";
$carros[10] = "camaro";
echo " <hr> <br>";
echo $carros[0];
echo "<hr> <br>";
print_r($carros);

//////////
echo " <hr> <br>";
$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";
echo $motos[5];
echo " <hr> <br>";
print_r($motos);

 /////////////////
 echo "<hr> <br>";
 $clientes = ["Rodrigo","Felipe","Bia"];
 $clientes[5] = "Rafaela";
 print_r($clientes);
 echo "<hr>";

 // count
 echo count($clientes); //conta quantos arrays tem

 $totalclientes = count($clientes);
echo $totalclientes;
echo "</hr> <br>";

//foreach
foreach($carros as $valor){
    echo $valor."<br>";
}
/////////////////////
echo "<hr>";
foreach($motos as $aparecer){
    echo $aparecer."<br>";
}
echo "<hr>";
//////////////////
foreach($clientes as $listacliente){
    echo $listacliente."<br>";
}
echo "<hr>";
/// arrays associativos
$pessoa = array("nome"=>"Samuel","idade"=>21,"altura"=>1.80);
$pessoa["cidade"] = "Sao Paulo";
echo $pessoa["altura"];
print_r($pessoa);
///////
echo "<br> <hr>";
foreach($pessoa as $indice => $valor){
    echo $indice.": ".$valor."<br>";
}
echo "<hr>";
//arrays multidimensionais
$times = array("cariocas"=> array("campeao"=>"vasco","vice-campeao"=>"flamengo","terceiro lugar"=>"botafogo"),
"paulistas"=> array("campeao"=>"santos","vice-campeao"=>"sao paulo","terceiro lugar"=>"palmeiras"),
"baianos"=> array("campeao"=>"bahia","vice-campeao"=>"vitoria","terceiro lugar"=>"itabuna"));

echo"<br> <hr>";

//////////////
foreach($times["cariocas"] as $indice => $valor){
    echo $indice.": ".$valor."<br>";
}
echo "<br> <hr>";
//////////////
foreach($times["paulistas"] as $resultados => $valoresultados){
    echo $resultados.": ".$valoresultados."<br>";
}
echo "<br> <hr>";
//////////////
foreach($times["baianos"] as $indice => $valor){
    echo $indice.": ".$valor."<br>";
}