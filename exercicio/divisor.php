<?php

$numero = $_GET["numero"];
if($numero%10 == 0){
    echo "divisivel por 10<br>";
} 
if ($numero%5 == 0){
    echo "divisivel por 5<br>";
}
if ($numero%2 == 0){
    echo "divisivel por 2<br>";
}

if($numero%10 != 0 && $numero%5 != 0 && $numero%2 != 0){
    echo "nao e divisivel por nenhum dos numeros";
}

?>