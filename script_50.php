<?php
//array_filter function:

function test($var)
{
	return($var & 1);
}
$a=array(1,2,3,4);
print_r(array_filter($a,"test"));	

?>