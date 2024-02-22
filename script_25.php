<html>
  <form method=post>
  <h1> swap number</h1>
  enter number-1:<input type=number name=num1/><br><br>
  enter number-2:<input type=number name=num2/><br><br>
   <input type=submit name=submit value="check it is prime or not"/>
   </form>
   </html>


<?php
        $n1=$_REQUEST['num1'];
		 $n2=$_REQUEST['num2'];
		
    $n1=$n1+$n2;
	$n2=$n1-$n2;
    $n1=$n1-$n2;
    
	echo "value of number-1:$n1<br>";
	echo "value of number-2 :$n2";
	
?>