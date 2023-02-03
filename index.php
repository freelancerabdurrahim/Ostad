<?php
$fname = "Abdur";
$lname = "Rahim";

printf('My Name is %2$s %1$s', $lname, $fname);
echo "\n";

$float1 = 25.12345;
printf("%.3f", $float1);
echo "\n";

$x = 12.235878;
$y = 11.25769;
printf("%04d \n",$x);
printf("%04d \n",$y);
printf("%08.3f \n",$x);
printf("%08.3f \n",$y);