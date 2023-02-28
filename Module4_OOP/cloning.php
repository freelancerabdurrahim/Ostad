<?php
class FavColor{
    public $data;
    function __construct($data){
        $this->data=$data;
    }

    function setData($data){
        $this->data= $data;
    }
}

$fc1 = new FavColor('Some Data');
$fc2=clone $fc1;
$fc2->setData('More Data');
print_r($fc2);
print_r($fc1);