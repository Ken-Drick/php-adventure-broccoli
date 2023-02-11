<!-- 
    Write a program that takes a character as input and outputs whether it is a vowel or a consonant.
-->
<?php
    $sample_v = ['a','e','i','o','u','A','E','I','O','U'];
    $character = "k";

    if (in_array(strtolower($character), $sample_v))
        echo $character.", the character you entered, is a vowel.";
     else
        echo $character.", the character you entered, is a consonant.";
?>