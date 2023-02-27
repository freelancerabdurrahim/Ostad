<?php
class Car {
    private $make;
    private $model;
    private $year;
  
    public function __construct($make, $model, $year) {
      $this->make = $make;
      $this->model = $model;
      $this->year = $year;
    }
  
    public function getMake() {
      return $this->make;
    }
  
    public function getModel() {
      return $this->model;
    }
  
    public function getYear() {
      return $this->year;
    }
  
    public function setMake($make) {
      $this->make = $make;
    }
  
    public function setModel($model) {
      $this->model = $model;
    }
  
    public function setYear($year) {
      $this->year = $year;
    }
  
    public function displayInfo() {
      echo "Car make: " . $this->make . "\n";
      echo "Car model: " . $this->model . "\n";
      echo "Car year: " . $this->year . "\n";
    }
  }
  
  $car = new Car("Toyota", "Corolla", 2015);
  
  $car->displayInfo();
  
  $car->setMake("Honda");
  $car->setModel("Civic");
  
  $car->displayInfo();
  