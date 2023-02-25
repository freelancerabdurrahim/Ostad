<?php


define('ok',123);
// echo ok;

class MyClass{
    const CITY="Dhaka";

    function sayHi(){
        echo "Hi From ".$this::CITY;
    }
}

$m=new MyClass();
$m->sayHi();

// echo MyClass::CITY;