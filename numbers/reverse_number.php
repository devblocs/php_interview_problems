<?php

// string function without function
function reverse_number(int $number){
    $temp = $number; // store the number in a temp variable
    $result = 0; // empty variable for storing the result

    while($temp > 1){
        $remainder = $temp%10; // get the remainder of the temp variable

        $result = ($result * 10) + $remainder; // multiply the result and add the remainder to it

        $temp /= 10; // change the temp variable value
    }

    return $result; // return result
}


// reversing a number with string function
function reverse_number_func(int $number){
    $num = (string) $number;

    return strrev($num);
}

$number = 23456;

echo "The reverse of number {$number} is: " . reverse_number($number);
echo "\n";
echo "The reverse of number {$number} with function is: " . reverse_number_func($number);