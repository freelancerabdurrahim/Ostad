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

/*
function serve($FoodTypes="Coffee", $NumberOfItems="2 Cup"){
    echo "{$FoodTypes} of {$NumberOfItems} have been served";
}

$fd = "Coffee";
$ni = 2;
serve();
*/


/*
function sum(int $x, int $y, int $z){
    return $x+$y+$z;
}
echo sum(5,6,7);
*/


/*
function sumUnlimited(int ...$numbers):int{
    $result=0;
    for($i=0; $i<count($numbers); $i++){
        $result += $numbers[$i];
    }
    return $result;
}
echo sumUnlimited(1,2,3,4);
*/


/*
function doTaskA(){
    echo "Step A Done \n";
}
function doTaskB(){
    echo "Step B Done \n";
}
function doTaskC(){
    echo "Step C Done \n";
}
function doTaskD(){
    echo "Step D Done \n";
}
function doTaskE(){
    echo "Step E Done \n";
}
function doTherLangerTask(){
    echo doTaskA();
    echo doTaskB();
    echo doTaskC();
    echo doTaskD();
    echo doTaskE();
}

doTherLangerTask();
*/

/*
function printN($i){
    if($i>=10){
        return;
    }
    echo $i."\n";
    $i++;
    printN($i);
}
// printN(5);

function printNumber($counter, $end, $stepping=1){
    if($counter >$end){
        return;
    }
    echo $counter."\n";
    $counter+=3;
    printNumber($counter, $end);
}
printNumber(19,49);
*/


/*
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
*/


/*
$name="Abdur Rahim";
function doSomething(){
    global $name;
    echo $name;
    // echo $GLOBALS['name'];
}
// doSomething();

function doStatic(){
    static $i;
    $i = $i ?? 0;
    $i++;
    echo $i."\n";
}
doStatic();
doStatic();
doStatic();
doStatic();
*/