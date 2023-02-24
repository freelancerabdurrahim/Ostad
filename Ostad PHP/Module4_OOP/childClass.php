<?php
class ParentClass{
    protected $name;
    public function __construct($name){
        $this->name= $name;
        $this->sayHi();

    }
    
    public function sayHi(){
        echo "Hi Form {$this->name}\n";
    }
}

class ChildClass extends ParentClass{
     public function sayHi(){
        parent::sayHi();
        echo "Hello";
     }
}

$cc= new ChildClass("Success");
