<?php


$strings = ["Hello", "World", "PHP", "Programming"];


function countVowels($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    
    $string = strtolower($string);
   
    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $vowels)) {
            $count++;
        }
    }
    return $count;
}


foreach ($strings as $str) {

    $vowelCount = countVowels($str);
    
 
    $reversedStr = strrev($str);
    
    
    echo "Original String: $str, Vowel Count: $vowelCount, Reversed String: $reversedStr\n";
}

?>