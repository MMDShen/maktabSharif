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



function injaun($string,$pattern,$word){

    //shouldnt be NULL
    $newWord="";

    //trace the string itself
    for($i=0;$i<strlen($string);$i++){

        //if char $i string == with first char of pattern!!
        if($string[$i]==$pattern[0]){

            //trace whole of pattern
            for($j=0,$c=$i;$j<strlen($pattern);$j++){
                if($pattern[$j]==$string[$c]){
                    $c++;
                }
                else{

                    //if breaks the first loop continue its tracing from the $i point!
                    break;
                }

                //if everything gone smooth, and $j reached to the last char of pattern
                if($j==strlen($pattern)-1){

                    //gives $c to $i, so the first loop starts the string trace after passing by the last char of pattern 
                    $i=--$c;
                    $newWord.=$word;
                }
            }

        }
        else{
            $newWord.=$string[$i];
        }
    }

    echo $newWord;
}


//Updated in jome    some errors gone and code became smoother  thanks
//in new version: now 2 maktab which are next door, both can changes!

$oldWord="salam panjshanbe maktabmaktab kelas darad. jome maktab kelas darad";
$pattern="maktab";
$newElement="ali";
injaun($oldWord,$pattern,$newElement);
// injaun("man, ye parandam arezo daram to bagham bashi man ye khuneye tango tarikam kashki to biaii cheragham bashi","man","ma");
//boro dige negam nakon asheghune sedam nakon eshgheto zuraki nakon