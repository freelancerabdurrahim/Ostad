<?php
class Color{
    public $color;

    function __construct($color){
        $this->color=$color;
    }

    function setColor($color){
        $this->color=$color;
    }

    function __toString(){
        return "This is a Color {$this->color}";
    }
}


$outputColor=new Color('Red');
echo $outputColor;