<?php
class DistrictCollection implements IteratorAggregate{
    private $districts;
    function __construct(){
        $this->districts=array();
    }
    function add($district){
        array_push($this->districts,$district);
    }

    function getDistricts(){
        return $this->districts;
    }

    // function getIterator(){
    //     return new ArrayIterator($this->districts);
    // }
    function getIterator(): Traversable{
        return new ArrayIterator($this->districts);
    }
}

$districts=new DistrictCollection;
$districts->add('Thakugaon');
$districts->add('Dinjapur');
$districts->add('Rangpur');
$districts->add('Bagura');

// $_districts=$district->getDistricts();
// print_r($_districts);
foreach($districts as $district){
    echo $district."\n";
}