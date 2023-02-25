<?php
abstract class Shape{
    abstract function getArea();
    abstract function getPerimeter();
}

class Rectaingle extends Shape{
    private $base, $height;

    function __construct($base, $height){
        $this->base= $base;
        $this->height= $height;
    }
    public function setBase($base){
        $this->base= $base;
    }
    public function setHeight($height){
        $this->height= $height;
    }
    function getArea(){
        return $this->base*$this->height;
    }
    function getPerimeter(){
    }
}

class Triangle extends Shape{
    private $base, $height, $height2;
    function __construct($base, $height, $height2){
        $this->base= $base;
        $this->height= $height;
        $this->height2= $height2;
    }
    function getArea(){
        return $this->base*$this->height*$this->height2;
    }
    function getPerimeter(){
    }
}


$tringle= new Triangle(5,6,2);
echo $tringle->getArea();