<?php

$size = 5;
$pascal = array(
    array(1),
);

for ($i = 1; $i <= $size; ++$i) {
    $prevCount = count($pascal[$i-1]);
    for ($j = 0; $j <= $prevCount; ++$j) {
        $pascal[$i][$j] = (
            (isset($pascal[$i-1][$j-1]) ? $pascal[$i-1][$j-1] : 0) + 
            (isset($pascal[$i-1][$j]) ? $pascal[$i-1][$j] : 0)
        );

        echo $pascal[$i][$j];
    }
    echo "\n";
}
// print_r($pascal);

