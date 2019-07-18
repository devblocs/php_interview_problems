<?php


$numbers = [1, 4, 2, 1, 6, 4, 9, 7, 2, 9];

echo "Original Array: ";
print_r($numbers);

echo "\n";

echo "converted array: ";
print_r(array_values(array_unique($numbers)));