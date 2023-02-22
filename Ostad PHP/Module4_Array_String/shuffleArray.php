<?php
$fruits = array('a'=>'banana', 'b'=>'Cherry', 'c'=>'Mango');
$key= array_rand($fruits);
// shuffle($fruits);
// echo $key;
echo $fruits[$key];