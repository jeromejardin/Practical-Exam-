<?php

$a = date_create('2019-05-31'); //variable for date
$b = date_create('2018-04-05');


$check = date_diff($a, $b); //to compare the two dates

echo $check -> format( '%y years %m months %d days' ); //display the difference of the 2 dates by year - month - days
?>