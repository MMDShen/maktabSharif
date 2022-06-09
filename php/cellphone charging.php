<?php
    $baseCharge=0;
    $siblCharge=3;
    $sumTime=0;

    if($siblCharge>=1 && $siblCharge<=100){
        while($baseCharge<$siblCharge){
            $sumTime+=$baseCharge+1;
            $baseCharge++;}
        echo $sumTime; }

# https://quera.org/problemset/17244/
?>
