<?php

abstract class OurClass{
    final function doSomeThing(){
        echo "Doing Something";
    }
}

class MyClass extends OurClass{
    // function doSomeThing(){
    //     echo "Doing Something Extends";
    // }
}

$my = new MyClass();
$my->doSomeThing();