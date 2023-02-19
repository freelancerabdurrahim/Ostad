<?php
$numbers = array(1,2,3,4,5,6,7,8,9,10,11,12,13);
function square($n){
    printf("Square of %d is %d \n",$n, $n*$n);
}
array_walk($numbers, 'square');