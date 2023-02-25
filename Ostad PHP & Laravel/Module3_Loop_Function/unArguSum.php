<?php
function sum(int $x, int $y, int $z){
    return $x+$y+$z;
}
echo sum(5,6,7);
echo PHP_EOL;


function sumUnlimited(int ...$numbers):int{
    $result=0;
    for($i=0; $i<count($numbers); $i++){
        $result += $numbers[$i];
    }
    return $result;
}
echo sumUnlimited(1,2,3,4);