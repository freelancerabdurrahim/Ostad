<?php
$strings= "Hello World";
$lenght=strlen($strings)-1;
for($i=$lenght;$i>=0;$i--){
    echo $strings[$i];
}

echo PHP_EOL;
$lenght=strlen($strings);
for($i=1; $i<=$lenght;$i++){
    echo $strings[$i * -1];
}

echo PHP_EOL;

echo strrev($strings);