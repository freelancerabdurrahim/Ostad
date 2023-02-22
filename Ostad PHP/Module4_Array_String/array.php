<?php
/*
// 1. Introduction to arrays

$studentName= array(
    "Abdur Rahim",
    "Jahangir",
    "Forid",
    "Monir"
);
$n=4;
// for($i=0; $i<count($studentName); $i++)
for($i=0; $i<$n; $i++)
echo $studentName[$i]."\n";
// echo count($studentName);
for($i=$n-1; $i>=0; $i--)
echo $studentName[$i]."\n";
*/


/*
// Array Manipulation

$studentName= array(
    "Abdur Rahim",
    "Jahangir",
    "Forid",
    "Monir"
);
$studentName[0]="AB Rahim";
$student=array_shift($studentName);
// echo $student."\n";
$student=array_pop($studentName);


array_unshift($studentName,"Rakib");
array_push($studentName,"Mithun");
$n=count($studentName);
for($i=0; $i<$n; $i++)
echo $studentName[$i]."\n";


// array_shift();
// array_pop();
// array_unshift();
// array_push();

*/



/*
// 3. Detailed discussion of associative arrays
$foods = [
    // '12'=> 'Ab Rahim',
    // '15'=> 'Rakib',
    // '17'=> 'Mithun',
    'vegetables' =>'brinjal, brocolli, carrot, capsicam',
    'fruits'=> 'orange, banana, apple',
    'drinks'=> 'water, milk'

];

// $foods['drinks']=$foods['drinks'].", orange juice"; 
// $foods['drinks'].=",cooll milk";

// echo $foods ['fruits'];
// foreach($foods as $key=>$value){
//     echo $key."=".$value."\n";
// }

// $keysman =array_keys($foods);
// print_r($keysman);

$keysman =array_keys($foods);
for($i=0; $i<count($keysman);$i++){
    $keysman2 =$keysman[$i];
    echo $foods[$keysman2]."\n";
}
*/

/*
// 4. String to Array and Array to String, Multiple Delimiters
$vegetables ='brinjal, brocolli, carrot, capsicam';

$vegetables =explode(', ','brinjal, brocolli, carrot, capsicam,patota');
// ', ' delimeter

echo $vegetables[2];
echo PHP_EOL;
echo count($vegetables);
echo PHP_EOL;

$vegetablesSring =join(', ',$vegetables);
echo $vegetablesSring;
echo PHP_EOL;

$vegetables =preg_split('/, |,/','brinjal, brocolli, carrot, capsicam,patota');
print_r($vegetables);
*/




$foods = [
    'vegetables' =>explode(', ','brinjal, brocolli, carrot, capsicam'),
    'fruits'=>explode(', ','orange, banana, apple'),
    'drinks'=>explode(', ','water, milk')

];
print_r($foods);
array_push($foods['drinks'],'Coffee');

print_r($foods);
echo $foods['vegetables'][2];

echo PHP_EOL;
$sample= [
    'test'=> [
        'test-again'=> [
            'a',
            'b',
            'c',
            'd'
            ]
        ],
    ];
echo $sample['test']['test-again'][2];
echo PHP_EOL;
$sample2= [
    [1,2,3,4],
    [11,22,33,44],
    [111,222,333,444,[1111,2222,3333]]
    ];
    print_r($sample2);

    echo $sample2[2][4][2];







