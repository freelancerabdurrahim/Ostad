<?php

$numbers= array(1,2,3,4,5,6,7,8,9,10);

function sum($oldvelue, $newvalue){
    if($newvalue % 2==0){
        return $oldvelue+$newvalue;
    }
    return $oldvelue;
}

$sum= array_reduce($numbers,'sum');
echo $sum;