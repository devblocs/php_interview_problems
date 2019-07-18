<?php

// palindrome in number
function palindrome_num(int $num){
    $temp = $num; // store the number in a temporary variable
    $result = 0; // set result to zero

    // iterate through the temporary variable till its rounded
    while(floor($temp)){
        $remainder = $temp % 10; // get the remainder of temporary variable divided by 10
        $result = $result * 10 + $remainder; // multiply the result by 10 and add the remainder
        $temp = $temp/10;  // change the temporary variable alue
    }
    return $result; // return the result
}


$number = 1235331;
$pal = palindrome_num($number);

if($number == $pal){
    echo "{$number} is a palindrome number";
}else{
    echo "{$number} is not a palindrome number";
}

echo "\n \n";

// string palindrome with strrev function
function palindrome_str_func(string $str){
    if(strrev($str) == $str){
        return true;
    }
    return false;
}

$string = "english";

if(palindrome_str_func($string)){
    echo "{$string} is a palindrome string";
}else{
    echo "{$string} is a not palindrome string";
}

echo "\n \n";

// string palindrome without strrev function
function palindrome_str(string $str){
    $string_length = strlen($str) - 1; // subtract the total length of the string
    $result = ''; // empty string to store the result
    
    // iterate through each value of a string
    for($i=$string_length; $i>=0; $i--){
        $result .= $str[$i]; // concatenate the string in the result string
    }
    return $result; // return result
}

if(palindrome_str($string) == $string){
    echo "{$string} is a palindrome string";
}else{
    echo "{$string} is a not palindrome string";
}
