<?php

$a = date_create('2019-05-31'); //variable for date
$b = date_create('2018-04-05');
$date1 = $a->format('Y-m-d') ;
$date2 = $b->format('Y-m-d') ;

$check = date_diff($a, $b); //to compare the two dates

echo "The Difference of ". $date1. " and ". $date2. " is: <br>";
echo $check -> format( '%y years %m months %d days' ); //display the difference of the 2 dates by year - month - days
?>
