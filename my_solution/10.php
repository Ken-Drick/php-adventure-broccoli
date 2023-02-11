<!-- 
    Write a program that takes an array of numbers as input and outputs the median of the numbers.
 -->
<?php
$num_array = [5, 7, 10, 14, 19, 25];
$len = count($num_array);
$len_2nd = $len / 2;
$len_1st = $len_2nd - 1;
$len1 = $num_array[$len_1st];
$len2 = $num_array[$len_2nd];
$median = ($len1 + $len2) / 2;

echo $median. " is the median of the given array.";

?>