<?php
// leapyear start
$year = 2008;
if($year % 4 ==0 && $year % 100 ==0 && $year % 400 ==0){
    echo "{$year} is a Leap year";
}else if($year % 4 ==0 && $year % 100 ==0 && $year){
    echo "{$year} is not a Leap year";
}else if($year % 4 ==0){
    echo "{$year} is a Leap year";
}
else{
    echo "{$year} is not a Leap year";
}

echo "\n";

if($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)){
    echo "{$year} is a Leap year";
}else{
    echo "{$year} is not a Leap year";
}
echo "\n";
// leapyear end

// nested if else start
$condition1 = true;
$condition2 = true;
$condition3 = true;
if($condition1){
    if($condition2){
        if($condition3){
            echo "All Condition True";
        }else{
            echo "flase";
        }
    }else{
        echo "flase";
    }
}else{
    echo "flase";
}

echo "\n";

if( $condition1 && $condition2 & $condition3){
    echo "All Condition True";
}elseif($condition1 && $condition2){
    echo "flase";
}elseif($condition1){
    echo "flase";
}
else{
    echo "flase";
}
// nested if else start

echo "\n";
// ternary oparator

$n = 10;
if( $n == 12){
    echo "Twelve";
}elseif($n == 10){
    echo "Ten";
}else{
    echo "A Number";
}

echo "\n";
// $test = (12 == $n) ? "Twelve" : (10 == $n) ? "Ten" : "A Number";
// $test = ($n == 12) ? "Twelve" : ($n == 10) ? "ten" : "Only Number";
// echo $test;



// switch start
$color = "orange";
switch($color){
    // case'red':
    //     echo "{$color} my fuvorite color";
    //     break;
    // case 'white':
    //     echo "{$color} my fuvorite color";
    //     break;
    case'red':
    case'white':
        echo ucwords ($color)." my fuvorite color";
        break;
    case'black':
        echo "{$color} my not fuvorite color";
        break;
    default:
    echo "{$color} This color is Oksy";
}

// switch end
echo "\n";
echo "\n";
echo "\n";

// Nested switch start
    $n = 13;
    $r = $n % 2;
    switch($r){
        case 0:{
            switch($n){
                case $n>0:
                    echo "$n is a postive Even number";
                    break;
                
                case $n<0:
                    echo "$n is a Negative Even number";
                    break;
            }
        }
        break;
       default:
            switch($n){
                case $n>0:
                    echo "$n is a postive Odd Number";
                    break;
                case $n<0:
                    echo "$n is a Negative Odd Number";
                    break;
            }
        }

       
        echo "\n";

    switch(true){
        case $r == 0 && $n > 0:
            echo "$n is a postive Even number";
            break;
        case $r == 1 && $n > 0:
            echo "$n is a postive Odd number";
            break;
        case $r == 0 && $n < 0:
            echo "$n is a Negative Even number";
            break;
        case $r == -1 && $n > 0:
            echo "$n is a Negative Odd number";
            break;
            
    }
// Nested switch end

echo "\n";
echo "\n";
// alternative syntax start
$n = 25;
if($n % 2 == 0){
    echo "$n is Even Number";
}else{
    echo "$n is Odd Number";
}

echo PHP_EOL;
if($n % 2 == 0):
    echo "$n is Even Number";
    echo PHP_EOL;
    echo "Success Number";

else:
    echo "$n is Odd Number";
    echo PHP_EOL;
    echo "Success Number";
    
endif;
// alternative syntax end