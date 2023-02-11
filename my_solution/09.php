<!-- 
    Write a program that takes a string as input and outputs the string with all vowels removed.
 -->
<?php
$samp_string = "Nomobuyo, Oshi, Hashitawa, Dokeda, Gunmicha, De, Ribura!";
$trans = array("a" => "","e"=>"","i"=>"","o"=>"","u"=>"", "A" => "","E"=>"","I"=>"","O"=>"","U"=>"");
echo strtr($samp_string, $trans);
?>