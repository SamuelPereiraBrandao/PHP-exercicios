<?php
// && ou and tudo verdadeiro
// || ou or apenas 1 verdadeiro
// xor retorna falso caso os 2 sejam verdadeiro e verdadeiro caso apenas 1 estiver positivo.
$idade = 25;
$nome = "Samuel";

if(($idade == 25) xor ($nome == "Samuel")): // && ou and
    echo "É verdadeiro";
else:
    echo "É falso";
endif;
