<!-- 
    Write a program that takes a string as input and outputs whether it is a palindrome.
-->
<?php
function chk_if_Palindrome($samp_string) {
    $e = 0;
    $s = strlen($samp_string) - 1;
    $ken = 0;
  
    while($s > $e){
      if ($samp_string[$e] != $samp_string[$s]){
        $ken = 1;
        break;
      }
      $e++;
      $s--;
    }
  
    if ($ken == 0){
      echo "'".$samp_string."', is a Palindrome string.\n";
    } else {
      echo "'".$samp_string."', is not a Palindrome string.\n";
    }
  }
  
  chk_if_Palindrome("deified");
  chk_if_Palindrome("peep");
  chk_if_Palindrome("gwak");
?>