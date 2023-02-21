<?php

/*
// 5. Multidimensional or nested arrays
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
/*/


// 6. Associative Array to String Conversion - Serialize, json

$student = array(
    'fname'=>'Abdur',
    'lname'=>'Rahim',
    'age'=>'24',
    'class'=>'BSc',
    'section'=> 'CSE'
);
print_r($student);
echo $student['fname']." ".$student['lname']."\n";
printf ("%s %s \n",$student['fname'],$student['lname']);

$serilize = serialize($student);
echo $serilize;
echo "\n";
$unserilize = unserialize($serilize);
print_r($unserilize);
echo "\n";
$jsondata =json_encode($student);
echo $jsondata;
echo "\n";
$jsonUndate = json_decode($jsondata,true);
print_r($jsonUndate);

