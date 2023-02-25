<?php

use Student as GlobalStudent;

class Student{
    private $name;
    private $age;
    private $class;
    
    function __construct($name='', $age='', $class=''){
        $this->name=$name;
        $this->age=$age;
        $this->class=$class;
    }
    public function __get($prop){
        return $this->$prop;
    }

    public function __set($prop, $value){
        $this->$prop=$value;
    }



    // function getName(){
    //     return $this->name;
    // }
    // function setName($name){
    //    $this->name=$name;
    // }
    // function getAge(){
    //     return $this->age;
    // }
    // function setAge($age){
    //      $this->age=$age;
    // }
    // function getClass(){
    //     return $this->class;
    // }
    // function setClass($class){
    //      $this->class=$class;
    // }

    
}

$m=new GlobalStudent('Abdur Rahim',24,8);
$m->name='Mithun';
echo $m->name;