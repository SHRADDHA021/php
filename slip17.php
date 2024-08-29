<?php
$a=array("sagar"=>"31","vicky"=>"41","Leena"=>"30","Ramesh"=>"40");
asort($a);
echo("<br> ascending order sort by value<br>");
print_r($a);
ksort($a);
echo("<br> ascending order sort by key<br>");
print_r($a);
arsort($a);
echo("<br> descending order sort by value<br>");
print_r($a);
krsort($a);
echo("<br> descending order sort by key<br>");
print_r($a);
?>
