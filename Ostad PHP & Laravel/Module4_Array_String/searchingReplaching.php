<?php
$string=("Quick Brown brown fox jump over ther lazy doc");
// $replachingString=str_ireplace("brown", "red",$string, $count);
$replachingString=str_replace("brown", "red",$string, $count);
// $replachingString=str_ireplace(array('brown','fox','doc'),array('red','cat','hen'),$string, $count);
$replachingString=str_ireplace(array('brown','fox','doc'),array('red','cat','hen'),$string, $count);
echo $replachingString;
echo PHP_EOL;
echo "Total Replaching {$count}";