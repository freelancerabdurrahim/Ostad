<?php

// 1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)


// 2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.


// 3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.


// 4.Write a PHP function to check if a string contains only letters and whitespace.


// 5.Write a PHP function to find the second largest number in an array of numbers.


// To complete the assignment, create a PHP file and write the code for each of the above functions. You should also include example usage for each function, to show that it is working correctly.

// echo "Hello Word";


// Question 1
function sortStringsByLength(array $strings): array {
    usort($strings, function($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $strings;
}
$strings = array('apple', 'orange', 'banana', 'strawberry', 'kiwi');
$sortedStrings = sortStringsByLength($strings);
print_r($sortedStrings);


// Question 2
function concat_reverse($str1, $str2) {
    $len1 = strlen($str1);
    $len2 = strlen($str2);
    $result = $str1;
    for ($i = $len2 - 1; $i >= 0; $i--) {
      $result = $str2[$i] . $result;
    }
    return $result;
  }

  $str1 = "hello";
$str2 = "world";
$result = concat_reverse($str1, $str2);
echo $result;


// Question 3
function remove_first_last($arr) {
  $length = count($arr);
  
  if ($length < 3) {
    return array();
  }
  
  array_shift($arr);
  array_pop($arr);
  
  return $arr;
}

$my_array = array(1, 2, 3, 4, 5);

$new_array = remove_first_last($my_array);

print_r($new_array);



// Question 4
function contains_only_letters_and_whitespace($str) {
  $letters_only = preg_replace('/[^a-zA-Z ]/', '', $str);
  
  return $letters_only === $str;
}
echo contains_only_letters_and_whitespace('Hello world!') ? 'Yes' : 'No';  // No
echo contains_only_letters_and_whitespace('This is a test') ? 'Yes' : 'No';  // Yes
echo contains_only_letters_and_whitespace('12345') ? 'Yes' : 'No';  // No



// Question 5
function second_largest_number($arr) {
  rsort($arr);
  return $arr[1];
}
$my_array = array(1, 5, 3, 9, 7);
$second_largest = second_largest_number($my_array);

echo $second_largest;  // Output: 7


