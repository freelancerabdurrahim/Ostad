<?php
$name='Abdur Rahim';

$strings01="My name is $name";
echo $strings01;

echo PHP_EOL;
$heredoc=<<<EOD
My name is $name
New Line
Text More
EOD;

echo $heredoc;