<?php

//TODO:LOWERCASE
function toLowerCase($string){
    $CAP="ABCDEFGHJKLMNOPQRSTUVIWXYZ";
    $cap="abcdefghjklmnopqrstuviwxyz";

    for($i=0;$i<strlen($string);$i++){
        for($j=0;$j<strlen($cap);$j++){

            if($string[$i]==$CAP[$j]){
                $string[$i]=$cap[$j];
                break;}
        }
    }

    return $string;
}
$string="God is A Great Feeling.";
    echo toLowerCase($string);