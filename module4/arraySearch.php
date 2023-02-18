<?php
$fruits= array('a'=>'apple','b'=>'banana','d'=>'Banana','c'=>'orange','plum','dates','mango');
$numbers= array(1,22,55,8,6,77,55,4);

if(in_array(55,$numbers)){
    echo '55 is found'."\n";
}
$offset=array_search(77,$numbers);
echo $offset."\n";

if(key_exists('a',$fruits)){
    echo "key banana exists";
}