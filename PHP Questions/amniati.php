<?php
// سوال مسئله اامنیتی کوئرا
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
      return 1;
  else
      return 0;
}



$input="aharze";
$answer="";
$CAP="ABCDEFGHJKLMNOPQRSTUVIWXYZ";
$cap="abcdefghjklmnopqrstuviwxyz";
$exp="/$input/";
$num=0;


for($i=0;$i<strlen($input);$i++){
  $exp="/$input[$i]/";
  $num=strpos($cap,$input[$i],0);
  if(isLowerCase($input[$i])==true){
    $num=strpos($cap,$input[$i],0)+1;
    $num+=preg_match_all($exp,$cap);
    $answer.=$cap[$num];
  }
  else{
      $num=strpos($CAP,$input[$i],0)+1;
      $num+=preg_match_all($exp,$CAP);
      $answer.=$CAP[$num];
  }
  $num=0;
}
echo $answer;



?>
