<?php

//TODO:LOWERCASE
function toLowerCase($string){

    // kalama ro bar asase Capitals check mikine
    // age chizi peyda kard moadelesh ba horufe kuchake ham shomarash dar string gharar mide
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
$string="Having Faith in God is A Great Feeling.";
    echo toLowerCase($string);