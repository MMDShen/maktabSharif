<?php 

/*
in three part
1. get data
2. Calculate Loop
3. Result
*/

//Get Data
# our's DNA Sample
$dna = "arf3hjvnmhjkgkgjgjgyjujc";




# Mr. Virus
$virus = "ers"; 

# meaning both Experiment 1 & Regex
$exp1 = "/$virus/m";

# need's to be a string otherwise gives an error
$cure = "";

# our Cure's DNA  'Vector'       
$exp2 = "/$cure/m";
//Get Data



//Calculate Loop
# we Created our Cure in this Loop
// i starts of last word of virus's string till reaches to 0 its first word 
for($i=strlen($virus)-1;$i>-1;$i--){
    $cure = $cure.$virus[$i];
}
//Calculate Loop



//for debug purposes
//echo $cure;


//Result
# our DNA Sample Have VIRUS and dont have Cure in itself
if(preg_match($exp1,$dna)==true && preg_match($exp2,$dna)!=true){
    echo "Shoma Bimar Hastid";
}

# our DNA Sample Have have Cure in itself 
//khastam shart nabudane virus ro vardaram chon cure bashe, virus budan va nabudanesh tabiatan farghi nadare
if(preg_match($exp1,$dna)!=true && preg_match($exp2,$dna)==true){
    echo "Shoma Bimar Nemishavid";
}

# our DNA Sample is like a pure Little Sheep Which is Left in the Field Unprotected! // Safety is Temporary //
if(preg_match($exp1,$dna)!=true && preg_match($exp2,$dna)!=true){
    echo "Shoma Salem Hastid";
}
//Result

?>