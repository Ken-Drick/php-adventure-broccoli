<!-- 
    Write a program that takes a number as input and outputs the sum of its digits.
 -->
<?php
   function digits_total($inp_d){
      $sum = 0;
      for ($i = 0; $i < strlen($inp_d); $i++){
         $sum += $inp_d[$i];
      }
      return $sum;
   }
   $inp_d = "69";
   print_r("The sum of digits is ");
   echo digits_total($inp_d);
?>