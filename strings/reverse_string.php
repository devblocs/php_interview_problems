<?php

function reverse_string(string $str){
    $temp = $str;
    $len = strlen($str);
    $result = "";

    for($i = ($len - 1); $i >= 0; $i--){
        $result .= $temp[$i];
    }

    return $result;
}

$str = "hello";

echo "The reverse of string '{$str}' is: '" . reverse_string($str) . "'";

echo "\n";
echo "The reverse of string '{$str}' with function is: '" . strrev($str) . "'";