<?php

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