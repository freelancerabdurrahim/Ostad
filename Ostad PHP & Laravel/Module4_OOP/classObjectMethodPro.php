<?php

class Human{
    public $name;
    function sayHi(){
        echo "Abdur\n";
        $this->sayName();
    }

    function sayName(){
        echo "My name is {$this->name}\n";
        }
}

class Cat{
    
    function sayHi(){
        echo "Maw\n";
    }
}

class Dog{
    function sayHi(){
        echo "gaw\n";
    }
}

$h1Oject = new Human();
$h2Oject = new Human();
$h1Oject ->name= "Rahim"; //set
$h2Oject ->name= "sohag"; //set
// $cOject = new Cat();
// $dOject = new Dog();

// $cOject->sayHi();
// $dOject->sayHi();
$h1Oject->sayHi(); //get
$h2Oject->sayHi(); //get