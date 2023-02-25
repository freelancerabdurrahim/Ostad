<?php
$string=("Quick brown fox jump over ther lazy doc");
// $offset= stripos($string, "Quick");
// $offset= strripos($string, "Quick");
$offset= strpos($string, "Quick");
if($offset !== false){
    echo "\nWord was found\n";
}
else{
    echo "\nWord was not found\n";
}