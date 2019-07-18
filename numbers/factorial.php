<?php

function factorial(int $num){
    $factorial = 1;

    for($i = 1; $i <= $num; $i++){
        $factorial *= $i;
    }

    return $factorial;
}

$number = 10;
echo "Factorial of number {$number} is: " . factorial($number);