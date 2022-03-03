<?php

$newfile = fopen("hello_there.php", "w"); //code to create a new file and write on it
$content = 
'<?php

//This is a comment

echo "This is a test Page!";
echo "Exam number two!";

//This is the end of a comment

?>';  //content of the newly created file

fwrite($newfile, $content); //function to write on the file
fclose($newfile); //to close the file

?>
