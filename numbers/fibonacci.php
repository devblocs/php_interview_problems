<?php

function fibonacci(int $num){
    $num1 = 0; // first number
    $num2 = 1; // second number
    $result = ""; // empty string for returning the result

    $counter = 0; // counter
    while($counter < $num){
        $result .= $num1 . " "; // append the result to $result variable

        $num3 = $num1 +  $num2; // add number 1 and 2
        $num1 = $num2; // assign number 2 to number 1
        $num2 = $num3; // assign number 3 to number 2

        $counter += 1; // increment the counter by 1
    }

    return $result; // return result
}

$number = 1;

echo "The fibonacci series of number {$number} is: ";
echo fibonacci($number);