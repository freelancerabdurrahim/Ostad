<?php

class Human{
    public $name;
    public $age;
    function __construct($personName, $personAge=0){
        echo "How Human Object is Create \n";
        $this->name = $personName;
        $this->age = $personAge;
    }

    function sayHi(){
        // echo "Abdur\n";
        $this->sayName();
    }

    function sayName(){
       if($this->age){
        echo "My name is {$this->name}, My age {$this->age} years old\n";
       }else{
        echo "My name is {$this->name}, My age janina\n";
       }
    }
}


$h1Oject = new Human("Abdu Rahim",25);
$h2Oject = new Human("Sohag Ahmed",28);
$h3Oject = new Human("milon");
$h1Oject->sayHi();
$h1Oject->sayHi();
$h3Oject->sayHi();