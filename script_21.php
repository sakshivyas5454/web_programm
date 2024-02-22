<html>
  <form method=post>
  <h1>palindrome number</h1>
  Enter number:<input type=number name=number/>
  <input type=submit name=submit value='check'/>
  </form>
</html>

<?php
      error_reporting(0)
	   $num = $_REQUEST['number'];
	   $n=strrev($num);
	   if($num ==$n)
	   {
		   echo "$num is palidrome";
	   }
	   else
	   {
		   echo "$num is not palidrome";
	   }

?>