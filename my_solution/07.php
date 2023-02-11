<!-- 
    Write a program that takes an array of strings as input and outputs the longest string in the array.
 -->
<?php
function find_strlen($array) {
$strlng = "";
  foreach ($array as $string) {
    if (strlen($string) > strlen($strlng)) {
      $strlng = $string;
    }
  }
  return $strlng;
}
$array = array("Gomenasorry", "Sorrymasen", "Konichiwassup","Kusa","wwwwww","frfr","Grass","HiRys","Kroyasumi","Sananara");
echo find_strlen($array). ", is the longest string within the array.";
?>