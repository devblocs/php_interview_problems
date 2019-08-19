<?php

$rows = 5;

echo "Printing simple star pattern \n";
for($i = 1; $i <= $rows; $i++){
    for($j = 1; $j <= $i; $j++){
        echo "* ";
    }
    echo "\n";
}

/*
// Output:
    *
    * *
    * * *
    * * * *
    * * * * *
*/

echo "\nPrinting simple number pattern \n";
for($i = 1; $i <= $rows; $i++){
    for($j = 1; $j <= $i; $j++){
        echo $j . " ";
    }

    echo "\n";
}

/*
// Output:
    1
    1 2
    1 2 3
    1 2 3 4
    1 2 3 4 5
*/


$chr = 65;
echo "\nPrinting ASCII characters\n";
for($i = 1; $i <= $rows; $i++){
    for($j = 1; $j <= $i; $j++){
        $val = chr($chr);
        echo $val . " ";
    }
    $chr += 1;

    echo "\n";
}

/*
// Output:
    A
    B B
    C C C
    D D D D
    E E E E E
*/