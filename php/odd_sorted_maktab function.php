<?php 
// 3  5  3  8  6  2  9  56  3
function odd_maktab(...$num){
    $brw=0;
    $ar=[];
    for($i=0;$i<count($num);$i++)
        for($j=$i;$j<count($num);$j++){
            if($num[$i]>$num[$j]){
                $brw=$num[$i];
                $num[$i]=$num[$j];
                $num[$j]=$brw;
            }
        }

    for($i=0;$i<count($num);$i++)
        if($num[$i]%2!=0)
            $ar[] = $num[$i];
    
    for($i=0;$i<count($ar);$i++){
        if($i<count($ar)-1)    
            echo $ar[$i].",";
        else
            echo $ar[$i];}
}
echo "adade farde sort shode: ";
echo odd_maktab(3,4,5,8,3,87,67,34,34,56,98);