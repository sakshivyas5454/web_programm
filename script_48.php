<?php
// array_reduce function:

function myfunction($v1,$v2)
{
	return $v1 . "-" . $v2;
}
$a=array("rutvi","dhruvi","palak");
print_r(array_reduce($a,"myfunction"));	

?> 