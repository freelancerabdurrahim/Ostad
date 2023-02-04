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