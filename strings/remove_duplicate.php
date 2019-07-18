<?php

// function remove_duplicate(string $str){
//     $filtered_string = implode(" ", str_split($str));

//     $string_array = explode(" ", $filtered_string);

//     $j = $string_array[0];
//     $result = "";

//     for($i=1; $i < count($string_array); $i++){
//         if($j != $string_array[$i]){
//             $result .= $j;
//         }

//         $j = $string_array[$i];
//     }

//     return $result;
// }
$string = "1AAABBCCCDDDDDDD";

echo "The string filtered from '{$string}' with function is : " . count_chars($string, 3);
// echo "\n";
// echo "The string filtered from '{$string}' without function is : " . remove_duplicate($string);