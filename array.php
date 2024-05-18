<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach($strings as $stringWord)
    {
        $revStrings=strrev($stringWord);
        // echo $revStrings."\n";
        $vowel=countVowel($stringWord);
        echo "original string: ".$stringWord.", Vowel Count:".$vowel." Reversed string:".$revStrings."\n";
    }

function countVowel($string){
//$string="Bangladesh";
$wordArray=str_split($string);
$count=0;
// $word="";
for($i=0;$i<strlen($string);$i++){
        $word=$wordArray[$i];
        if ($word=="a"||$word=="e"||$word=="i"||$word=="o"||$word=="u"){
            $count=$count+1;
            }
        
        }
        
       return $count;
}







 
 


