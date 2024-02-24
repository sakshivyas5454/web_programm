<?php
//array_column function using multidimensional array:

$a=array(
		array("id"=>123,
		      "name"=>"peter",
			  "salary"=>15000),
		array("id"=>124,
		      "name"=>"john",
			  "salary"=>10000),	  
        array("id"=>125,
		      "name"=>"devid",
			  "salary"=>20000)
	    );
$salary=array_column($a,"salary");
print_r($salary);
?>