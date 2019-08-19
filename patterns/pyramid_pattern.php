<?php

$rows = 5;
$spaces = 5;

echo "Printing star pyramid pattern";
for($i = 0; $i <= $rows; $i++){
    for($k = 0; $k < $spaces; $k++){
        echo " ";
    }

    for($j = 0; $j < (2 * $i - 1); $j++){
        echo "*";
    }
    $spaces--;
    echo "\n";
}

/*
// Output:
    *
   ***
  *****
 *******
*********
*/

$spaces = $rows;
echo "Printing number pyramid pattern";
for($i = 1; $i <= $rows; $i++){
    for($k = 1; $k < $spaces; $k++){
        echo " ";
    }

    for($j = 1; $j < (2 * $i - 1); $j++){
        echo $j . "";
    }

    $spaces--;
    echo "\n";
}