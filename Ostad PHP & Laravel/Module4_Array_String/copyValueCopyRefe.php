<?php

/*
// 7. Copy by Value and Copy by Reference
$person = array('fname'=>'Abdur', 'lname'=>'Rahim');
$newperson = $person;
$newperson['lname']='Rahman';
print_r($person);
print_r($newperson);
*/


/*/
// 8. Removing data from associative arrays
$person = array('fname'=>'Abdur', 'lname'=>'Rahim');
print_r($person);
unset( $person['lname']);
print_r($person);

*/


// 9. Discussion of Empty Values ​​(Important)
$name=5;
if(isset($name)){
    echo "Name is set";
}else{
    echo "Not set";
}

echo PHP_EOL;
if(empty($name)){
    echo "Name is empty";
}else{
    echo "Not empty";
}
echo PHP_EOL;
if(isset($name) && (is_numeric($name) || $name!='')){
    echo "Name is set and it's not emty";
}else{
    echo "Name is either not set or it\'s emty";
}