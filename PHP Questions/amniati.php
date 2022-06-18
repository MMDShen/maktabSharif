<?php

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



$input="Charze";
$answer="";
$CAP="ABCDEFGHIJKLMNOPQRSTUVWXYZ ";
$cap="abcdefghijklmnopqrstuvwxyz ";
$exp="/$input/i";
$num=0;

// errors which detected in jome:
// ba space be cap ha ezafe kardan, khata raft!!!!!!!!

// be ham mortabetan:
// ama z hanuz dar charze hesab nemishe     ************
// dar strpos($$CAP,$input[$i],0)  echosh bayad jash bashe ama overflow hast!   *************
// in khata shokre KHODA hal shod

for($i=0;$i<strlen($input);$i++){
  $exp="/$input[$i]/";
  $num=strpos($cap,$input[$i],0);
  if(isLowerCase($input[$i])==true){
    $num=strpos($cap,$input[$i],0);
    $num+=preg_match_all($exp,$cap);
    if($num>25)
      $num-=26;
    $answer.=$cap[$num];
  }
  else{
      $num=strpos($CAP,$input[$i],0);
      $num+=preg_match_all($exp,$CAP);
      if($num>25)
        $num-=26;
      $answer.=$CAP[$num];
  }
  $num=0;
}
echo $answer;



?>