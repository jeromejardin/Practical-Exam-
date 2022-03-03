<?php
    //function to check the reverse spelling is same with the original word
    function Palin($input){
        if(strrev($input) == $input){
            return 1;
        }else{
            return 0;
        }   
    }

    $word = "madam";
    
    //display if the word is palindrome or not
    if(Palin($word)){
        echo "<br>". $word. " is a Palindrome";
    }else{
        echo "<br>". $word. " is not Palindrome";
    }
    
?>