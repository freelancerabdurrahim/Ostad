<?php
/*
for($i=0; $i<=10; $i++){
    echo "\n";
    for($j=0; $j <$i; $j++)
    echo "*";
    echo PHP_EOL;
}

$i=0;
while($i <15){
    $i++;
    echo $i.PHP_EOL;
}
echo PHP_EOL;
$i=0;
do{
$i++;
echo $i."\n";
}while($i <12);
echo PHP_EOL;

$i=0;
a: $i++;
echo $i.PHP_EOL;
if($i<13) goto a;
*/

/*
for($i=10, $j=1; $i > 0, $j<10; $i--, $j++){
    echo $i.":".(11-$i);
    echo ":".$i.":".$j;
    echo PHP_EOL;
}
*/

/*
for($i=0; $i<100; $i++){
    echo ($i%7 ==0) ? $i."\n":"";
    echo ($i%11 ==0) ? $i."\n":"";
}
for($i=0, $j=0; $i <100; $i+=7, $j+=11){
    echo $i."\n";
    echo ($j <100)? $j."\n":'';
   
}
*/
/*
for($i=0; $i <30; $i++){
    
    if($i <10){
        continue;
    }
    echo $i."\n";
}

$j=0;
while($j<10){
    echo $j."\n";
    $j++;
}*/

/*
$veryold=0;
$old =1;
$new=1;
for($i=0; $i<10; $i++){
    echo $veryold." ";
    $old=$new;
    $new= $veryold+$old;
    $veryold=$old;
}
*/

// for($row=1; $row<=5;$row++){
//     for($col=1; $col<=5-$row; $col++){
//         echo"  ";
//     }
//     for($col=1; $col<=2*$row-1;$col++){
//         echo"* ";
//     }
//     echo"\n";
// }

// for($row=5-1; $row>=1;$row--){
//     for($col=1; $col<=5-$row; $col++){
//         echo"  ";
//     }
//     for($col=1; $col<=2*$row-1;$col++){
//         echo"* ";
//     }
//     echo"\n";
// }



/*
function hasPairWithSum($arr, $sum) {
    for ($i = 0; $i < count($arr); $i++) {
      for ($j = $i + 1; $j < count($arr); $j++) {
        if ($arr[$i] + $arr[$j] == $sum) {
          return true;
        }
      }
    }
    return false;
  }
  $input = [5, 7, 1, 2, 8, 4, 3];
$targetSum = 8;

if (hasPairWithSum($input, $targetSum)) {
  echo "true";
} else {
  echo "false";
}
*/

$foo = function($x){
  return $x*2;
};
$bar = function($x)use($foo){
  return $foo($x)+1;
};
echo $bar(5);