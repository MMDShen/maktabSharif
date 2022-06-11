
<?php

//TODO:PRIME    
function pri($number){
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
        if($ans!=0)
            $ans=1;

        
    }
    return $ans;
}


//TODO:GOLDBACH
function goldbach($a){
    $sum=[];
    for($i=1;$i<$a;$i++)
        
        if(pri($i)==1){//echo $i."  ";
            for($j=1;$j<$a;$j++)
                if(pri($j)==1 && $i+$j==$a)
                    $sum[]="$i+$j";  }

                    
        
    
    echo var_dump($sum);
}

goldbach(12);


