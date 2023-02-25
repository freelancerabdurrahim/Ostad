<?php
/*
// 10. Extracting some data from an array while keeping the original array intact
$fruits= array('apple','banana','orange','plum','dates','mango');
$someFruits= array_slice($fruits,-5,-3,true);
print_r($someFruits);


$reandom= array("a"=>12,"b"=>14,"c"=>16,"d"=>18,"e"=>20,"kk"=>50, "f"=>55);
$reandomData= array_slice($reandom,3,null,true);

print_r($reandomData);
/*/


/*/
// 11. Decluttering an array
$fruits= array('apple','banana','orange','plum','dates','mango');
$reandom= array("a"=>12,"b"=>14,"c"=>16,"d"=>18,"e"=>20,"kk"=>50, "f"=>55);
$newFruits=array('jackfruit','tamarind');
$someFruits= array_splice($fruits,3,-2,$newFruits);
print_r($someFruits);
print_r($fruits);
/*/


// 12. Concatenating several arrays (very important)

$fruits= array('apple','banana','orange','plum','dates','mango');
$random= array("a"=>12,"b"=>14,"c"=>16,"d"=>18,"e"=>20,"99"=>50, "88"=>55);

$r1=array_slice($random,0,2,true);
$r2=array_slice($random,4,null,true);
$r3=array('j'=>45,'k'=>47);

$randomDataCorrectWay=$r1+$r2+$r3;
print_r($random);
print_r($randomDataCorrectWay);

