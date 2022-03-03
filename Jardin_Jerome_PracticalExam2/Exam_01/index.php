<?php
    //function to check the reverse spelling is same with the original word
    function Palin($input){
         
        $input = str_replace(' ','', $input); //remove spaces between words

        if(strrev($input) == $input){
            return 1;
        }else{
            return 0;
        }   
    }

    $word = "nurses run";
    $word2 = "awit";
    $number = "1345";
    $number2 = "29892";
    
    //display if the word is palindrome or not
    if(Palin($word)){
        echo "<br><br>". $word. " is a Palindrome";
    }else{
        echo "<br><br>". $word. " is not Palindrome";
    }

    if(Palin($word2)){
        echo "<br><br>". $word2. " is a Palindrome";
    }else{
        echo "<br><br>". $word2. " is not Palindrome";
    }

    if(Palin($number)){
        echo "<br><br>". $number. " is a Palindrome";
    }else{
        echo "<br><br>". $number. " is not Palindrome";
    }
    
    if(Palin($number2)){
        echo "<br><br>". $number2. " is a Palindrome";
    }else{
        echo "<br><br>". $number2. " is not Palindrome";
    }
?>
