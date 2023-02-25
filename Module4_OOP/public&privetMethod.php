<?php
class Fund{
    // private $fund;
    public $fund;
    function __construct($initialFund=0){
        $this->fund= $initialFund;
    }

    public function addMoney($money){
        $this->fund+=$money;
    }

    public function decutMoney($money){
        $this->fund-=$money;
    }
    public function getTotal(){
        echo "Total fund is {$this->fund}\n";
    }
}

$ourFund= new Fund(100);
// $ourFund-> fund = 90;
$ourFund->getTotal();
$ourFund->addMoney(15);
$ourFund->decutMoney(8);
$ourFund->getTotal();