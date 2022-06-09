<?php
    $input=7;
    /*tikeye balaii*/
    $space=floor($input/2);
    for($i=0,$c=1;$i<floor($input/2)+1;++$i){
        for($b=0;$b<2;$b++){
            for($m=0;$m<$space;$m++)
                echo "&nbsp"."&nbsp";
            for($m=0;$m<$c;$m++)
                echo "*";
            for($m=0;$m<$space;$m++)
                echo "&nbsp"."&nbsp";
        }
        echo "<br>";
        --$space;
        $c+=2;
    }
     /*tikeye balaii*/

      /*tikeye paiini*/
    $space=1;
    for($i=0,$c=$input-2;$i<floor($input/2);$i++){
        for($b=0;$b<2;$b++){
            for($m=0;$m<$space;$m++)
                echo "&nbsp"."&nbsp";
            for($m=0;$m<$c;$m++)
                echo "*";
            for($m=0;$m<$space;$m++)
                echo "&nbsp"."&nbsp";
        }
        echo "<br>";
        $space++;
        $c-=2;
    }
    /*tikeye paiini*/

    
/* dar source code javab match mikone
AMA dar web shabihesho mide
&nbsp behtar bude az " " dar natije va amalkarde kulli*/
 ?>
// noktash in bud ke $nbsp nime space hast
// YA ALI
