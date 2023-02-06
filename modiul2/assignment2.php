<?php

$tuitionFree = 25000;
$cummissionTax = ($tuitionFree > 20000) ? "25%" : (($tuitionFree > 10000 && 20000 > $tuitionFree) ? "20%" : (($tuitionFree < 10000 && 7000 > $tuitionFree) ? "15%" : "Invalid Amount"));
echo $cummissionTax;

 
echo PHP_EOL;
$tuitionFree =12000;
$cummissionTax = ($tuitionFree >= 20000) ? "25%" : (($tuitionFree >= 10000 && 20000 > $tuitionFree) ? "20%" : (($tuitionFree < 10000 && 7000 >= $tuitionFree) ? "15%" : "Invalid Amount"));
echo $cummissionTax;