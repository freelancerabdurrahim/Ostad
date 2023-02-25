<?php

class Shap{
    protected $name;
    protected $area;

    public function __construct($name){
        $this->name=$name;
        $this->calCulateArea();
        
    }
    public function getAra(){
        echo "This {$this->name}'s area is {$this->area}\n";
    }

    public function calCulateArea(){

    }
}

class Traiangle extends Shap{
    private $a, $b, $c;
    public function __construct($a, $b, $c){
        $this->a=$a;
        $this->b=$b;
        $this->c=$c;
        parent::__construct("Traiangle");

    }
    public function calCulateArea(){
        $perimeter = ($this->a+$this->b+$this->c)/2;
        $this->area=sqrt($perimeter*($perimeter-$this->a)*($perimeter-$this->b)*($perimeter-$this->c));
        // $this->area = sqrt($perimeter*($perimeter-$this->a)*($perimeter-$this->b)*($perimeter-$this->c));

    }

}

class Rectangle extends Shap{
    private $a, $b;
    public function __construct($a, $b){
        $this->a=$a;
        $this->b=$b;
        parent::__construct("Rectangle");

    }
    public function calCulateArea(){
        $this->area=$this->a * $this->b;
        // $this->area = sqrt($perimeter*($perimeter-$this->a)*($perimeter-$this->b)*($perimeter-$this->c));

    }

}

$r= new Rectangle(2,5);
$r->getAra();

$t=new Traiangle(10,12,8);
$t->getAra();