<?php

$rows = 5;

echo "Printing reverse star simple pattern \n";
for($i = 0; $i <= $rows; $i++){
    for($j = $rows-$i; $j >= 1; $j--){
        echo "* ";
    }

    echo "\n";
}

/*
// Output:
    * * * * *
    * * * *
    * * *
    * *
    *
*/

echo "\nPrinting reverse number simple pattern \n";
for($i = 0; $i <= $rows; $i++){
    for($j = $rows-$i; $j >= 1; $j--){
        echo $j . " ";
    }
    echo "\n";
}

/*
// Output:
    5 4 3 2 1
    4 3 2 1
    3 2 1
    2 1
    1
*/

$chr = 65;
echo "\nPrinting ASCII characters in reverse simple pattern\n";
for($i = 0; $i <= $rows; $i++){
    for($j = $rows-$i; $j >=1; $j--){
        $val = chr($chr + 1);

        echo $val . " ";
    }
    $chr += 1;

    echo "\n";
}