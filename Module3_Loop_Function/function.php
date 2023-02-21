<?php
// function Even Or Odd Number
/*
function numberEvenOrOdd($n){
    if($n % 2 ==0){
        return true;
    }else{
        return false;
    }
}
$x = 17;
if(numberEvenOrOdd($x)){
    echo "{$x} is are Even Number";
}else{
    echo "{$x} is are Odd Number";
}
*/

/*
function factorial($n){
    $result=1;
    for($i=$n; $i>1; $i--){
    $result *=$i;
    }
    return $result;
}
$x=5;
echo "factorial of {$x} is ".factorial($x);
*/


function serve($FoodTypes="Coffee", $NumberOfItems="2 Cup"){
    echo "{$FoodTypes} of {$NumberOfItems} have been served";
}

$fd = "Coffee";
$ni = 2;
serve();














