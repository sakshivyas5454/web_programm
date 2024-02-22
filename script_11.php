<html>
<body>
<form method=post> 
    enter value:<input type="number" name="val"/>
	</form>
	</body>
</html>



<?php
 $oe=$_REQUEST['val'];

if($oe%5==0)
{
  echo "it is even number";
}
  else
  {
    echo "it is odd number";
  }
?>