<?php
$numbers1= array(1,22,55,8,6,77,25,4);
$numbers2= array(1,23,45,8,9,45,55,4);

$fruits1= array('a'=>'apple','b'=>'banana','d'=>'kumra');
$fruits2= array('a'=>'apple','b'=>'mula','d'=>'banana','c'=>'orange','plum','dates','mango');

$numbers_Common= array_intersect($numbers1,$numbers2);
$fruits_Common= array_intersect_assoc($fruits1, $fruits2);
print_r($numbers_Common);
print_r($fruits_Common);



$numbers_Common_diff= array_diff($numbers1,$numbers2);
$fruits_Common_diff= array_diff($fruits1, $fruits2);
print_r($numbers_Common_diff);
print_r($fruits_Common_diff);
