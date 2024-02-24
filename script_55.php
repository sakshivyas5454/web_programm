<?php
//array_key_first and last function :

$a=array("a"=>1,"b"=>2,"c"=>3);
$firstkey=array_key_first($a);
var_dump($firstkey);

$b=array("a"=>1,"b"=>2,"c"=>3);
$lastkey=array_key_last($b);
var_dump($lastkey);

?>