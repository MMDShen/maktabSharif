<?php

$string = "ae parvaze boland";
function capf($string)
{
    // $len = strlen($string);
    // for($i=0;$)
    $a = "ABCD";
    $b = "abcd";
    for ($i = 0; $i < 4; $i++) {
        if ($string[0] == $b[$i]) {
            $string[0] = $a[$i];
        }
    }
    return $string;
}

$ab  =capf($string);

