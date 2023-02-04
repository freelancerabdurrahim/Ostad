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



// switch
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