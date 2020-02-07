<?php

$nome = $_GET["nome"];
$sexo = $_GET["sexo"];
$idade = $_GET["idade"];

if ($sexo == "feminino" && $idade < 18 ) {
    echo "$nome acesso proibido";

} else {
    echo "$nome acesso permitido";
}
?>