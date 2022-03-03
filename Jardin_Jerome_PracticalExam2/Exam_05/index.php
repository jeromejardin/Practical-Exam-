<?php

function rev($word){
    return strrev($word);
    
} // function to reverse the spelling of the given word

$word = "Wood";
$laugh = "Laugh";
echo "The word is: ". $laugh . " and " . $word ; //display the original spelling of the word
echo "<br> The reversed spelling is: ". rev($laugh) . " and " .rev($word); //display the reversed spelling of the word

echo "<br><br> Doing it with numbers";
$no1 = '1239648';
echo "The number is: ". $no1  ; //display the original spelling of the word or number format
echo "<br> The reversed structure is: ". rev($no1) ; //display the reversed spelling of the word or number
?>
