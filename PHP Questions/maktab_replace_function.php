<?php 
// $g="/man/";
// $n="man";
// if(preg_match_all($g,$n)==true)
//     echo "bale";

// function injaun($str,$out,$in){
//     $arr=[];
//     $arr=explode(" ",$str);
//     echo var_dump($arr);
// }

// injaun("man ye.parandam","oiu","yu");


function injaun($string,$pattern,$word){
    $newWord="";
    for($i=0;$i<strlen($string);$i++){
        if($string[$i]==$pattern[0]){
            for($j=0,$c=$i;$j<strlen($pattern);$j++){
                if($pattern[$j]==$string[$c]){
                    $c++;
                }
                else{
                    break;
                }
                if($j==strlen($pattern)-1){
                    $i=$c;
                    $newWord.=$word;
                }
            }
            $newWord.=$string[$i];
        }
        else{
            $newWord.=$string[$i];
        }
    }

    echo $newWord;
}

$oldWord="salam panjshanbe maktab kelas darad. jome maktab kelas darad";
$pattern="maktab";
$newElement="ali";
injaun($oldWord,$pattern,$newElement);
//boro dige negam nakon asheghune sedam nakon eshgheto zuraki nakon