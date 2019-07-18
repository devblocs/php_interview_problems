<?php
/**
 * An Armstrong number is the one whose value is equal to the sum of the cubes of its digits.
 * 
 *     407 = (4*4*4) + (0*0*0) + (7*7*7)  
 *          = 64 + 0 + 343  
 *     407 = 407  
 */

 function armstrong_number(int $num){
     $temp = $num; // store the number in a temporary variable
     $result = 0; // variable to store the result

     // loop till the the temporary variable is not equal to zero
     while($temp != 0){
         $remainder = $temp%10; // get the remainder of temp variable divided by 10
         $result = $result + $remainder*$remainder*$remainder; // add the result with cube of the remainder

         $temp = $temp/10; // change the temp variable by dividing it by 10
     }

     return $result; // return result
 }

 $number = 407;

 if(armstrong_number($number) == $number){
     echo "{$number} is an armstrong number";
 }else{
    echo "{$number} is not an armstrong number";
 }