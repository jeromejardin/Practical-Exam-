
<?php
//WHILE LOOP sum of all even numbers from 0 to 10
    $Winit = 0; //intiial value
    $Wcons = 0;  //storage for even value number
    $Wans = "sum of all even numbers from 0 to 10 = ";

    //WHILE condtion
    while( $Winit <= 10){

        //even number checker
        if($Winit % 2 == 0){

            //adding even number values
            $Wcons= $Wcons+$Winit; 
        }
        $Winit++; //increment initial value
    }

    echo "WHILE Loop <br>";
    echo $Wans . $Wcons; //display answer
    echo "<br><br>"; //next line

//DO WHILE sum of all odd numbers from 0 to 10
    $DWinit = 0; //intiial value
    $DWcons = 0;  //storage for even value number
    $DWans = "sum of all odd numbers from 0 to 10 = ";

    //DO WHILE condtion 
    do{
        if($DWinit % 2 == 1){
        $DWcons= $DWcons+$DWinit;

        
        }
        $DWinit++; //increment intial value
    }
    while($DWinit <= 10);
        
    echo "DO WHILE Loop <br>";
    echo $DWans. $DWcons; //display answer
    echo "<br><br>"; //next line

//FOR Loop Fibonacci 
    $int = 0;
    $i = 0;
    $x = 1 ;
    $lt = 0;

    echo "FOR Loop <br>";
    echo "Fibonacci sequence of 10 numbers:: from 0 to 9 <br>";
    
    for($int = 0 ; $int <= 9; $int++){
        
        echo $i . " ";
        $lt = $i + $x;
        $i = $x;
        $x = $lt;

    }

//ARRAY display the value that have most number of occurence
echo"<br><br>";
    $name = array ('Marvin', 'Marco', 'Marvin', 'Marco', 'Marco', 'Marvin', 'Christian');
    sort($name); //sort the values in ascending 
    $no = array_count_values($name); //count the values (occurences)

    echo "<i>Display most occured value: if Tied arrange it alphabetically:: Array ('Marvin', 'Marco', 'Marvin', 'Marco', 'Marco', 'Marvin', 'Christian')</i> <br>";
    echo"<b>The Repeating names are: </b>" ;

    foreach($no as $names => $no){ //convert the array
        if($no > 1){ //check if the value is repeating more than 1
            
            
            print $names. " " ; //display the names
        }
    }


//SORT by Asscending
echo"<br><br>";
    $number = array(9863, 7127, 2020, 80, 131, 55, 100);
    sort($number);

    echo "<i>Sort the array in Ascending order, if the value is odd, round it up to nearest 10:: Array (9863, 7127, 2020, 80, 131, 55, 100)</i> <br> ";

        foreach($number as $odd){ //convert the array
            if($odd % 2 == 1){ //check if the value is odd
                $newodd = round($odd, -1); //round off the value to the nearest tens
                echo $newodd. "<br>"; //display rounded off value
            }else{
                echo "--".$odd."--<br> "; //display even value
            }
        }
    
     

//display the item that is not repetetive
echo"<br><br>";
    $color = array ('red', 'blue', 'black', 'red', 'blue', 'blue', 'red', 'gold');
    $norep = array_count_values($color); //count the value (occurences)
    $uncolor = []; //storage of the non repeating value
        
    echo "<i>Display the non repeating item:: Array ('red', 'blue', 'black', 'red', 'blue', 'blue', 'red', 'gold')</i> <br>";
    echo "<b>The non repeating colors: </b>";

        foreach($norep as $ncolor => $repeat){ //condition to check if the value is equal to 1
            if($repeat == 1){

                $uncolor = $ncolor; //storing of the array value
                print_r($uncolor ." ") ; //display the array
            }
        }
    
    
?>

