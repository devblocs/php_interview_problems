<?php

// simple star pattern
function simple_triangle(int $rows){
    for($i=0; $i<$rows; $i++){
        for($j=0; $j<=$i; $j++){
            echo "* ";
        }
        echo "\n";
    }
}

echo "Printing simple triangle: \n";
simple_triangle(5);

// 180 triangle
function pattern_180(int $rows){
    for($i = 1; $i <= $rows; $i++){
        for($j = 1; $j <= $rows; $j++){
            if($j <= ($rows-$i)){
                echo " "." ";
            }else{
                echo "* ";
            }
        }
        echo "\n";
    }
}

echo "\n";
echo "Printing 180 degree triangle: \n";
pattern_180(5);


// triangle
function triangle($rows){
    $k = 2 * $rows - 2;

    for($i = 0; $i < $rows; $i++){
        for($j=0; $j < $k; $j++)
            echo " ";
            $k = $k - 1;

            for($j = 0; $j <= $i; $j++){
                echo "* ";
            }

            echo "\n";
    }
}


echo "\n";
echo "Printing triangle: \n";
triangle(5);

// reverse triangle
function reverse_triangle($rows){
    for($i = 0; $i <= $rows; $i++){  
        for($j = $rows-$i; $j >= 1 ; $j--){  
            echo "* ";  
        }  
        echo "\n";  
    } 
}

echo "\n";
echo "Reverse triangle: \n";
reverse_triangle(5);