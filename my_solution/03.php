<!-- 
    Write a program that takes a string as input and outputs the frequency of each character in the string.
-->
<?php
$string_input = "There are many people in here.";

foreach (count_chars($string_input, 1) as $i => $freq) {
   echo "There were $freq instance(s) of \"" , chr($i) , "\" in the string.<br>";
}
?>