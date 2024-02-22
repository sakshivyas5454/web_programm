<html>
   <form method=post>
   <h1>prime number</h1>
   
     
	Enter positive number:<input type=number name=num/>
    <input type=submit name=submit value="check prime or not"/>
</form>
	</html>


<?php

 $numb=$REQUEST['num'];
 $flag=0;
 $number =abs($numb);
 for($i=2;$i<$number;$i++)
 {
	 if($number%$1==0)
	 {
		 echo "not a prime number";
		 $flag=1;
		 break;
	 }
	 if($flag==0)
	 {
		 echo "this is a prime number";
	 }

?>