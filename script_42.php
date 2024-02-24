<?php
error_reporting(0);
//array_diff function:

$a=array("a"=>"red","b"=>"yellow","c"=>"pink","d"=>"blue");
$b=array("e"=>"red","f"=>"yellow","g"=>"pink");

$result=array_diff($a,$b);
print_r($result);
?>