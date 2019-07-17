<?php
/**
 * How would you find the number of repeated characters in a given string "abcabcxyz" or How do you print duplicate characters from a string
 * 
 * #****** Algorithm*********#
 * - Define a string.
 * - Two loops will be used to find the duplicate characters. Outer loop will be used to select a character and initialize variable count by 1.
 * - Inner loop will compare the selected character with rest of the characters present in the string.
 * - If a match found, it increases the count by 1 and set the duplicates of selected character by '0' to mark them as visited.
 * - After inner loop, if count of character is greater than 1, then it has duplicates in the string.
 * 
 * #****** End *********#
 * 
 * #****** Functions used*********#
 * 
 * strlen() - to find the length of the string
 * 
 * #****** End *********#
 * 
 */

 function find_duplicate($string){
     $result = ""; //variable for storing the output

    for($i = 0; $i < strlen($string); $i++){
        $count = 1; // initialize counter

        for($j = $i+1; $j < strlen($string); $j++){
            // if the both the values are same and not empty
            if($string[$i] == $string[$j] && $string[$i] != " "){
                $count++; // increment counter

                $string[$j] = "0"; //set the second value to 0 
            }
        }

        // check if the counter is greater than 1 and current string value is not equal to 0
        if($count > 1 && $string[$i] != "0"){
            $result .= $string[$i]; // concatenate the current string
        }
    }

    return $result; // return the result output
 }

echo "<p>Find the duplicate values in a given string</p>";

echo "<p>String is \"abcabcxyz\" </p>";

echo "<p> Number of repeated character is: " . strlen(find_duplicate("abcabcxyz")) . "</p>";

echo "<p> Repeated characters are: " . find_duplicate("abcabcxyz") . "</p>";