<?php
$strings= "Hello World";
// echo $strings[2];
$strlen=strlen($strings);
echo substr($strings, $strlen -5);
echo PHP_EOL;
echo substr($strings, -5,-2);
// echo $strlen;
