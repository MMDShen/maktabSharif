<?php 
// 3  5  3  8  6  2  9  56      input
//in each level
//1:
// 2  5  3  8  6  3  9  56
//2:
// 2  3  5  8  6  3  9  56
//3:
// 2  3  3  8  6  5  9  56
//4:
// 2  3  3  5  8  6  9  56
//5:
// 2  3  3  5  6  8  9  56

// dor haye bikhod dar in mesal..
//6:
// 2  3  3  5  6  8  9  56
//7:
// 2  3  3  5  6  8  9  56
function odd_maktab(...$num){

    // 
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

    
    // adad fard ro be tartibi ke dar marhale ghabl save shodan gharar mide
    for($i=0;$i<count($num);$i++)
        if($num[$i]%2!=0)
            $ar[] = $num[$i];
    
    // chon soal sharayete khas dasht nemishod dar marhale ghabl javab haro chap kard
    // dar in halghe javabha chap mishan
    for($i=0;$i<count($ar);$i++){
        if($i<count($ar)-1)    
            echo $ar[$i].",";
        else

            // age be akhari dar arr residim ino chap kon
            echo $ar[$i];}
}


echo "adade farde sort shode: ";
odd_maktab(3,4,5,8,3,87,67,34,34,56,98);