<?php
function printN($i){
    if($i>=10){
        return;
    }
    echo $i."\n";
    $i++;
    printN($i);
}
printN(5);
echo PHP_EOL;

function printNumber($counter, $end, $stepping=1){
    if($counter >$end){
        return;
    }
    echo $counter."\n";
    $counter+=3;
    printNumber($counter, $end);
}
printNumber(19,49);