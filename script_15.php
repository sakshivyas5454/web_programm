<html>
  <body>
     <form method=post>
	    <h1>largest value</h1>
		
		enter value1: <input type=number name='val1'/><br><br>
         enter value2: <input type=number name='val2'/><br><br>
         enter value3: <input type=number name='val3'/><br><br>
             <input type=submit name='submit' value='check largest value'/>
			 </form>
      </body>
</html>



<?php

       $l1=$_REQUEST['val1'];
       $l2=$_REQUEST['val2'];
       $l3=$_REQUEST['val3'];
	   
	   if($l1 >$l2)
	   {
		   if($l1 > $l3)
		   {
			   echo "$l1 is largest value";
		   }
       }
else
{
	if($l2 >$l3)
  	{
		echo "$l2 is largest value";
	}
	else
	{
		 echo "$l3 is largest value";
	}
}
	
?>