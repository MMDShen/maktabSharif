<?php 
/*farz ro bar in migirim ke tamamie adad vorudi int hastan va na float
mishe func is_int ro be avvaleshun ezafe kard ama tulani mishe
in func ro dar akhar ezafe mikonim  dar ghesmate echo ha*/

//TODO:FACTORIAL
function facto($number){
    //if be 0 or negative
    if($number<=0)
        echo 0;

    //sum==1 cus if be 0 its always 0 
    $sum=1;
    for($i=1;$i<=$number;$i++)
        $sum *= $i;

    echo $sum;
}

// for debug
 //$d=6; if i wanna check if input is float or not i add it here  if(is_int($d)){TODO;}
 //facto($d);

//TODO:PRIME    
function pri($number){

    //prevents making float & if number
    //dont reach till its half to a division 
    //its for sure a prime number
    $brw = (int)($number/2);

    //shouldnt be NULL
    $ans=1;

    if($number==2)
        $ans=1;
    if($number<2){
        $ans=0;
    }
    if($number>2){
        //starts of 2 cus prevents of number/1=0
        for($i=2;$i<=$brw;$i++){

            //if finds a Condition True ..
            if($number%$i==0){
                $ans=0;
                break;}
        }

        //if "Not Prime" isnt in string then loop 
        //finished without a problem!
        if($ans!=0)
            $ans=1;

        
    }
    return $ans;
}

// for debug
// $d=14;
// pri($d);

//TODO:REVERSE
function rev($string){
    //camelCase
    $newWord="";

    //upSideDown !!
    for($i=strlen($string)-1;$i>-1;$i--)
        $newWord .= $string[$i];
    echo $newWord;
}

// for debug
// $d="foggy";
// rev($d);

//TODO:SORT
// az Alphabeticalesh factor gereftam :D
function sorty($number){

    //first loop for ensuring of our's steps
    //how?  ensures big datas are in Descending Order
    for($i=0;$i<count($number);$i++){

        //for momentery checks
        for($j=0;$j<count($number);$j++){

            //changes position of values ..
            if($number[$i]<$number[$j]){
                $temp = $number[$j];
                $number[$j]=$number[$i];
                $number[$i]=$temp;}
            //changes position of values ..

        }
    }

    //typeAnswer
    foreach($number as $value)
        echo $value."  ";
    echo "<br>";

    //debug
    //echo var_dump($number);
}

// for debug
// $number = array(1,6,34,2,76,4,9,90);
// sorty($number);

//TODO:LOWERCASE
function isLowerCase($string){
    //$CAP="ABCDEFGHJKLMNOPQRSTUVIWXYZ";
    $county=0;

    //checkList
    $cap="abcdefghjklmnopqrstuviwxyz";

    //the mother loop, i for string
    //the nested loop, j for cap(checklist)
    for($i=0;$i<strlen($string);$i++){
        for($j=0;$j<strlen($cap);$j++){

            //if all matches adds one to counter
            if($string[$i]==$cap[$j]){
                $county++;
                break;}
        }
    }

    //if counter equals with length of string
    //then everything is fine
    //otherwise
    //its not lowercase
    if($county==strlen($string))
        echo "wihaaaaaa";
    else
        echo "SORRY, MAYBE NEXT TIME";
}

// for debug
// $god="imyourgod";
// isLowerCase($god);

//TODO:IN FARSI= DOZD, GORG, DARD .IN ENGLISH= SOS, SIS, MOM, LOL.
//* Special Name *
function mom($string){

    $len = strlen($string) ;
    $key = "";
    $half = (int) ($len/2);
    $value="";

    //departs first part
    for($i=0;$i<$half;$i++)
        $key .= $string[$i];
    
    //if length of string is ZOJ!
    if($half + $half == $len){

        //ta nesfesh ro begir az rast
        //EXAMPLE:  moorroom
        // key is moor  value will be moor too!
        for($i=$len-1;$i>$half-1;$i--){
           $value .= $string[$i]; 
        }
    }

    //if length of string is FARD!
    else{

        //baz ta nesfe FARDESH ro begir az unvarish
        //EXAMPLE:  moorQroom
        // key is moor  value will be moor too!
        for($i=$len-1;$i>$half;$i--){
            $value .= $string[$i]; 
        }
    }

    // for debug   
    //echo $half;  << bedast ovordanesh va khata girish 1 saati tul burd.
    //echo $key."  ".$value;

    //age joft kelid va ghofl match hastan
    if($key==$value)

        //daro va kon
        echo "its Palindrome";

    //dar gheire in surat velesh kon
    else
        echo "its not Palindrome";
}

// for debug
//$palin="Room";
//mom($palin);
//200 rond ..
?>
