<?php
$numbers = array(1,2,3,4,5,6,7,8,9,10,11,12,13);

function square($n){
    printf("Square of %d is %d \n",$n, $n*$n);
}
// array_walk($numbers, 'square');


function cube($n){
    return $n*$n*$n;
}
print_r($numbers);
// $neyArrayMap= array_map('cube',$numbers);



function even($n){
    return $n % 2 == 0;
}
function odd($n){
    return $n % 2 == 1;
}
$evenNumbers = array_filter($numbers, 'even');
$oddNumbers = array_filter($numbers, 'odd');

print_r($evenNumbers);
print_r($oddNumbers);


$persion = array('sujn','abdur rahim','shakil','rakib','mithun','sojib','bikash','sazzad');
function filterByS($name){
    return $name[0]=='s';
}
$newFilterPerson=array_filter($persion,'filterByS');
print_r($newFilterPerson);