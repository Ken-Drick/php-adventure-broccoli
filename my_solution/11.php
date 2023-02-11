<!-- 
    Write a program that takes an array of numbers as input and outputs the average of the numbers.
-->
<?php
$array_of_num = array(6, 9, 4, 20, 11, 5, 19, 22);
$array_ave = array_sum($array_of_num) / count($array_of_num);
echo $array_ave. " is the average of the given array.";
?>
