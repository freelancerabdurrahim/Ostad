<?php
// solved this program php
// Write a PHP function to find the longest word in a string?
// Hints :
// // Example usage
// $str = "The quick brown fox jumped over the lazy dog";
// echo longestWord($str);
// Output: jumped

function longestWord($str) {
    $words = preg_split('/\s+/', $str); 
    $longest_word = '';
    
    foreach($words as $word) {
      if(strlen($word) > strlen($longest_word)) {
        $longest_word = $word; 
      }
    }
    
    return $longest_word;
  }

  
  $str = "The quick brown fox jumped over the lazy dog";
    echo longestWord($str);
