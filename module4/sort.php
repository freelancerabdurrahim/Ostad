<?php

$fruits= array('a'=>'apple','b'=>'banana','d'=>'Banana','c'=>'orange','plum','dates','mango');
$numbers= array(1,22,55,8,6,77,55,4);
asort($fruits,SORT_STRING);
print_r($fruits);

asort($numbers,SORT_STRING);
print_r($numbers);

for($i=0; $i<count($numbers); $i++){
    echo $numbers[$i]."\n";
}

foreach($numbers as $number){
    echo $number."\n";
}
