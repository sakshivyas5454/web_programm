<html>
   <form method=post>
   <h1> random number</h1>
    enter your guess:<input type=number name=nos />
	</form>
	</html>
	
<?php
   $num=$_REQUEST['nos'];
   $check=rand(1,10);
   echo "your guess: ".$num."<br><br><br>";
   echo "random function :".$check."<br><br>";
   if($num == $check)
   {
	     echo "your guess is correct";
   }
   else
   {
	    echo " your guess doesn't match with function";
   }
?>


