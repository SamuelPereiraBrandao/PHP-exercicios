<?php 
function exibirnome($nome){
    echo "Meu nome é $nome";
}

exibirnome("Samuel Pereira");

echo "<hr>";

function calcularMedia($nomee,$n1, $n2, $n3, $n4){
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
if($media >= 7 ){
    echo "$nomee, Foi aprovado, com a média de: $media";
} else{
    echo "$nomee, Foi reprovado! com a média de: $media";
}
}
calcularMedia("Samuel Pereira",8,7,7,7);
echo "<br>";
calcularMedia("Joao silva",5,3,1,2);