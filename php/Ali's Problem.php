<?php

# get Data
$word = "FundamentalProgramming";
$word = strtolower($word);
$new = "";
$count = "";


/* in three parts:
1. Get Data
2. Calculate Loop
3. Result Loop */

# Calculate Loop
for($i=0;$i<strlen($word);$i++){
    $w = $word[$i];
    $exp = "/$w/m";
    if(preg_match($exp,$new)==false){
        $new = $new . $w;
        $count = $count . preg_match_all($exp,$word);}
}

# Result Loop
echo $new." ";
for($i=0;$i<strlen($new);$i++){
    echo $new[$i] . $count[$i];
}


// Debug
//  echo $new."  ".strlen($new)."<br>";
//  echo $count."  ".strlen($count);
 ?>