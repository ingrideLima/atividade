<?php

$numero1 = $_GET["numero1"];
$numero2 = $_GET["numero2"];

$adicao = $numero1 + $numero2;
$total = 0;
        if ($adicao > 20){
            $total = $adicao + 8;
        } else{
            $total = $adicao - 5;
        }
        echo $total;

?>