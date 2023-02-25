<?php

class Shap{

}

class Shapes{
    private $shapes;
    function __construct(){
        $this->shapes=array();
    }

    function addShape(Shap $shape){
        array_push($this->shapes, $shape);
    }

    function totalShape(){
        return count($this->shapes);
    }
}

class Rectangle extends Shap{

}
class Triangle extends Shap{
    
}
class Student{
    
}

$shapCollection= new Shapes();
$shapCollection->addShape(new Rectangle());
$shapCollection->addShape(new Triangle());

echo $shapCollection->totalShape();