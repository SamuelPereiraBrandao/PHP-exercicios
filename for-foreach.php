<?php
for ($contador = 0; $contador <=10; $contador++){
    echo "o contador está em $contador <br>";
}


for($valor = 10; $valor >= -1; $valor--){
    echo "testando $valor <br> <hr>";
}


for($valortab = 0; $valortab <= 10; $valortab++){
    echo "8 X $valortab = ".($valortab*8)."<br>";
}


$cores = array("Verde","Vermelho","Azul");

foreach($cores as $indicee => $valor){
    echo $indicee."-".$valor."<br>";
}
