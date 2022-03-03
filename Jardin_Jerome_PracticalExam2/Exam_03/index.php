<?php

function PSquare($sq){
    $psq = (int)(sqrt($sq));
    return ($psq * $psq == $sq);
} // function to squared the initial number

function fibo($cons){
    return PSquare(5 * $cons * $cons + 4 ) ||
         PSquare(5 * $cons * $cons - 4 ) ;
}// function to check if the initial number is a fibonacci


for ($start = 1 ; $start <= 20; $start++)
    if(fibo($start)){
        echo "<br>".$start. " is a Fibonacci Number";
    }else{
     echo "<br>".$start. " is not Fibonacci Number";
    } //increment the numbers and display if the number is a fibonacci or not



?>