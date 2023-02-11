<!-- 
    Write a program that generates a random password of a specified length. The password should include upper and lowercase letters, numbers, and special characters.
-->
<?php
function generator_rex($charas) 
{
  $possibilities = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz!@#$%^&*(){}[];:<>/?.,`~\|';
  return substr(str_shuffle($possibilities), 0, $charas);
}
  echo "Generated password: ". generator_rex(15);
?>
