<?php
function fiboncci($old, $new, $end){
    static $start;
    $start=$start?? 1;

    if($start>$end){
        return;
    }
    $start++;

    echo $old." ";
    $_temp= $old+$new;
    $old=$new;
    $new =$_temp;

    fiboncci($old, $new, $end);
}
fiboncci(0, 1,10);