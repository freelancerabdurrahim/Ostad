<?php
$name="Abdur Rahim";
function doSomething(){
    global $name;
    echo $name;
    // echo $GLOBALS['name'];
}
doSomething();

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