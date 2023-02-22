<?php
$string ="Hello World its oksy How Are You";
$parts=explode(" ",$string);
print_r($parts); 

echo PHP_EOL;
$orginal=join(" ",$parts);
// $orginal=implode(" ",$parts);
echo $orginal;
echo PHP_EOL;

$parts2=str_split($string);
print_r($parts2);
echo PHP_EOL;

$parts3=strtok($string," ,");
while($parts3 !==false){
    echo $parts3."\n";
    $parts3=strtok(" ,");
}
echo PHP_EOL;

$parts4=preg_split("/ |,/", $string);
print_r($parts4);