<?php
// $numbers = array(12,13,14,15,16,16,17,18,19,20);
$numbers = array();
for($i=12; $i<21; $i++){
    array_push($numbers, $i); 
}
print_r($numbers);

echo PHP_EOL;
foreach(range(11,20,2) as $evenNumber){
    echo $evenNumber."\n";
}

