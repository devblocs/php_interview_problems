<?php
function table(int $num){
    for($i = 1; $i <= 10; $i++){
        echo "{$num} x {$i} = " . $num*$i . "\n";
    }
}

table(5);